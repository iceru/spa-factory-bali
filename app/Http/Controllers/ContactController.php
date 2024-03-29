<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view('admin.contact.create', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'number' => 'required',
                'message' => 'required',
            ]);

            $contact = new Contact;

            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->number = $request->number;
            $contact->message = $request->message;

            $contact->save();

            // $config = \SendinBlue\Client\Configuration::getDefaultConfiguration()
            //     ->setApiKey('api-key', env('BREVO_KEY'));

            // $apiInstance = new \SendinBlue\Client\Api\TransactionalEmailsApi(
            //     new \GuzzleHttp\Client(),
            //     $config
            // );
            // $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
            // $sendSmtpEmail['to'] = array(array('email' => 'sales@spafactorybali.biz', 'name' => 'Spa Factory Bali'));
            // $sendSmtpEmail['templateId'] = 1;
            // $sendSmtpEmail['params'] = array(
            //     'USER' => $contact->name, 'DATE' => \Carbon\Carbon::now(),
            //     'USER_EMAIL' => $contact->email, 'PHONE_NUMBER' => $contact->number, 'MESSAGE' => $contact->message
            // );

            // $result = $apiInstance->sendTransacEmail($sendSmtpEmail);

            Mail::to("sales@spafactorybali.biz")->send(new ContactMail($request));

            $return = redirect()->route('contact.index')->with('success', 'Message sent!');
        } catch (Exception $e) {
            $return = redirect()->route('contact.index')->with('error', 'Something is wrong, please try again - '
                . $e->getMessage());
        }

        return $return;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
