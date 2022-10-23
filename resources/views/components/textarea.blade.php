<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->

    @props(['disabled' => false, 'field' => '', 'value' => ''])

    <textarea {{ $disabled ? 'disabled' : ''}}
{!! $attribute->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 foucs:ring-opacity-50'])
    >{{$value}}</textarea>
@error($field)
    <div class="text-red-600 text-sm">{{$message}}</div>
@enderror

</div>