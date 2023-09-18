<h1>Danh sach tin tuc</h1>
{{$new_title}}
{{$list}}
{!$new_author!}
@if (empty($new_title))
<p>test if :{{$new_title}}</p>
@else 
<p>Khong co gi</p>
@endif
<?
$number = 1;
?>
{{$number}}
@php echo 2; @endPhp