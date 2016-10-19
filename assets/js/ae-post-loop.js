    <div class="image-avatar">
        <a href="http://localhost/project/{{=&#32;permalink&#32;}}">
            <img src="http://localhost/project/{{=&#32;the_post_thumbnail&#32;}}" alt="">
        </a>
    </div>
    <div class="info-items">
        <h2><a href="http://localhost/project/{{=&#32;permalink&#32;&#32;}}">{{= post_title }}</a></h2>
        <div class="group-function">
            {{= post_excerpt }}
            {{= comment_number }}
            <#if( comment_number > 1){ #>
                Comments            <# } else{ #>
                Comment            <# } #>
        </div>
    </div>
    <div class="image-avatar col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="http://localhost/project/{{=&#32;permalink&#32;}}">
            <img src="http://localhost/project/{{=&#32;the_post_thumbnail&#32;}}" alt="">
        </a>
    </div>
    <div class="info-items col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <p class="author-post">Written by {{= author_name }}</p>
        <p class="date-post">{{= post_date }}</p>
        <h2><a href="http://localhost/project/{{=&#32;permalink&#32;}}">{{= post_title }}</a></h2>
        <div class="group-function">
            {{= post_excerpt }}
            <a href="http://localhost/project/{{=&#32;permalink&#32;}}" class="more">Read more</a>
            <p class="total-comments">
                {{= comment_number }}
            </p>
        </div>
    </div>
