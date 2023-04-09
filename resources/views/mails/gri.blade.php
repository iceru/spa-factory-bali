<h3>New Request GRI Form Submit - Spa Factory Bali</h3>
<p>Date: {{ \Carbon\Carbon::now()->timezone('Asia/Jakarta')->toDayDateTimeString() }}</p>
<ul>
    <li>Name: {{ $gri->name }}</li>
    <li>
        Email: {{ $gri->email }}
    </li>
    <li>
        Company: {{ $gri->company }}
    </li>
    <li>
        Job Title: {{ $gri->job_title }}
    </li>
</ul>
<br>
Usage for:
<p>
    {{ $gri->usage_for }}
</p>
