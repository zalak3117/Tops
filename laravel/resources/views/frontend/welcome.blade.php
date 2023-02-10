<x-mail::message>
{{$msg}}
<br>

# Introduction

{{$sub}} 

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
