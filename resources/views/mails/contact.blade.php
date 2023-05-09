<h3>New Contact Form Submit - Spa Factory Bali</h3>
<p>Date: {{ \Carbon\Carbon::now()->timezone('Asia/Jakarta')->toDayDateTimeString() }}</p>
<br>
<ul>
    <li>Name: {{ $contact->name }}</li>
    <li>
        Phone Number: {{ $contact->number }}
    </li>
    <li>
        Email: {{ $contact->email }}
    </li>
</ul>
<br>
Message:
<p>
    {{ $contact->message }}
</p>
