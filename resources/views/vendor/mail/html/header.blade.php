<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('siteinfo')}}{{$info->sitelogo}}" class="logo" alt="GreenFresh Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
