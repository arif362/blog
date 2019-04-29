  <div class="post-details">
    <label>
         <strong> {{ $post -> title }} </strong>
         <span class="fa fa-clock-o"></span>
         <small class="text-muted"> {{ $post -> created_at->diffForHumans() }} </small>
    </label>
    <p> 
    {{ $post -> description }} <br>
    <small class="text-muted"> Last Update {{date('M-d ,Y  g:i a',strtotime($post -> updated_at))}} </small>
  </p>
  </div>