//load page html
<div class="inner {{= unread_class }}">
        <div class="img-avatar">
            {{= author_avatar }}
        </div>
        <div class="conversation-text">
            <p class="name-author"><a href="http://localhost/project/{{=&#32;permalink&#32;}}">{{= author_name }}</a></p>
        <span class="latest-reply">
            {{= latest_reply_text }}
        </span>
        <p class="latest-reply-time">{{= latest_reply_time }}</p>
        </div>
    </div>