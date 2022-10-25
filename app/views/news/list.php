<h1>Danh sách tin tức</h1>
{{ $new_title }} <br>
{{ $new_content }} <br>
{{ 'Unicode' }} <br>
{{ toSlug('Tiêu đều bài viết') }}><br>

@if (!empty($new_title))
    <p>Tên tiêu đề: </p> {{ $new_title }}
@else
    <p>Không có tiêu đề</p>
@endif

@php
$number = 1;
$number++;
$data = [
    'Item 1',
    'Item 2',
    'Item 3'
];    
@endphp

<br>
{{ $number }}

@for($i = 0; $i < count($data); $i++)
    <p>{{ $data[$i] }}</p>
@endfor

@php
$i=0
@endphp

@while ($i < 10)
<p>{{ $i }}</p>
@php
$i++;
@endphp
@endwhile

@foreach ($data as $key => $value)
    <p>{{ $key }} - {{ $value }}</p>
@endforeach

