<div class="cards w-80 border-2 rounded-3xl rounded-lg mb-3">
    <div class="image-section  bg-cover bg-no-repeat bg-center img-1 mb-2">
      <img class="rounded-t-lg" src="/pages/images/Our Objective.jpg" alt="">
    </div>
    <div class="card-header text-blue-600 font-semibold text-xl px-4 ">
      {{$title}}
    </div>
    <div class="card-content px-4 text-sm font-medium mb-1">
      {{$excerpt}}
    <p class="px-4 text-xs leading-4 mb-2 hover:underline hover:cursor-pointer">Read more</p>
    <hr>

    <div class="article-author-and-date-container flex justify-between items-center px-4 pb-3">
      <p class="author text-sm font-normal">{{$author}}</p>
      <p class="date">{{$published_at }}</p>

    </div>
</div>
