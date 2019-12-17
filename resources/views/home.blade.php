@extends('layout.base')

@section("title")
  Home
@stop

@section("header")
<header>
  <h1 class='alert alert-primary'>Witaj</h1>
</header>
@stop

@section("appContent")
  <h5 class='alert alert-warning'>To co widzisz jest przykładem pierwszego projektu w Laravelu. Wszystkie dane przedstawione w aplikacji zostały zmyślone.</h5>
  <p style="margin-right:30%"><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ultricies lacus massa, at venenatis est elementum vitae. Proin dictum sem nec nisl porttitor volutpat. 
  Sed et rhoncus tellus. Morbi pharetra auctor finibus. Vestibulum justo sapien, fringilla ac lorem sit amet, vestibulum gravida lectus. Vestibulum tempor nisl in imperdiet 
  pretium. Curabitur euismod tortor non tortor pretium pulvinar. Nam risus velit, vehicula ac volutpat id, ullamcorper sed dui. Vivamus finibus mi sed varius eleifend. Quisque 
  id elementum orci. Fusce vel justo nisl. Vestibulum porta euismod libero vitae consectetur. Cras convallis viverra libero, sed fermentum nunc tincidunt non. Phasellus id mauris
  lorem. Suspendisse iaculis suscipit mollis.</i></p>
  <img style="margin-left:5%" src="img/dino.gif">
@stop