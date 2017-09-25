@component('mail::message')
# Introduction

Thank You for Purchasing the “Why youth?” PDF eBook! Your Download Link is Below! 

@component('mail::button', ['url' => ''])
Download
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
