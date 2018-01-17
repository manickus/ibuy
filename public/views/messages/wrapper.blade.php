<div class="row">
  <div class="col-md-8">
    <div class="text-center">
    <h3>Wiadomości</h3>
    @include('messages.create');
    @foreach ($ad->msgs as $msg)
      @include('messages.show')
    @endforeach
  </div>
  </div>
</div>
