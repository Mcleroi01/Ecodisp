@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwATIFdTNbigS4Zcn-DJ3rVsx0DpThGSGrw&s"
                    class="logo" alt="Ecodisp">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
<div class=""> </div>