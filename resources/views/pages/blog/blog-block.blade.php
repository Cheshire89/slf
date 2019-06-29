<div class="col-md-6 col-sm-6">
    <div class="at-blog-box at-col-default-mar">
        <div class="at-blog-img">
            <img src="images/blog/1.jpg" alt="">
            <div class="at-blog-date">
                <ul>
                    <li><i class="icofont icofont-businessman"></i><a href="#">Mark Jonson</a>
                    </li>
                    <li><i class="icofont icofont-calendar"></i><a href="#">{{ date_format($post->created_at, "F j, Y") }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="at-blog-content">
            <h4><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
            <p>{{ $post->body }}</p>
            <a href="blog-details.html">Read More <i class="zmdi zmdi-long-arrow-right"></i></a>
        </div>
    </div>
</div>