<ul>
  <?php
  $b=0;
  $perb=4;
  $total=count($childs);
  ?>
  @foreach($childs as $child)
  <li>
    <a style="color: blue">
      <div class="container-fluid">
        <div class="text-center" >
          <i class="fa fa-user fa-2x user-icon"></i>
        </div>
        <div class="text-center">
          {{ $child->user_name}} 
        </div>
        
        
      </div>
    </a>
    <?php
    $chaildUsers=\App\Helper\Helper::members($child->id);
    ?>
    @if(count($chaildUsers)>0)
      @include('user.tree.chaild',['childs' => $chaildUsers,'myReferl'=>$myReferl])
    @endif
    <?php
    $b++;
    ?>
  </li>
  @endforeach
  @for(;$b<$perb;$b++)
  @include('user.tree.null',['user' => $myReferl])
  @endfor
</ul>