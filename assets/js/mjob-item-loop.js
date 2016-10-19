//load page html
<div class="inner clearfix">
        <div class="vote">
            <div class="rate-it star" data-score="{{= rating_score }}"></div>
            <span class="total-review">({{= mjob_total_reviews }})</span>
        </div>

                <div class="bookmark">
            <p class="marks {{= status_class }}">{{= status_text }}</p>
        </div>
        
        <div class="set-status">
            <a href="http://localhost/project/{{=&#32;permalink&#32;}}"><img width="100%" src="http://localhost/project/{{=&#32;the_post_thumbnail&#32;}}" alt=""></a>
            <# if( is_admin || is_author){ #>
            <div class="status">
                <input type="hidden" name="_wpnonce" value="c2cbaf83a3" />
                <a  href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#">{{= mjob_status }}</a><br/>
                <# if(  post_status == 'pending') { #>
                    <ul>
                        <# if( !is_admin ){ #>
                            <li><a href="http://localhost/project/{{=&#32;edit_link&#32;}}" target="_blank" data-toggle="tooltip" data-placement="top" title="Edit"  class=""><i class="fa fa-pencil"></i></a></li>
                            <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="delete" title="Delete" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-trash-o"></i></a></li>
                        <# } else { #>
                            <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="approve" title="Approve" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-check"></i></a></li>
                            <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="reject" title="Reject" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-times"></i></a></li>
                            <li><a href="http://localhost/project/{{=&#32;edit_link}}" target="_blank" data-action="edit" title="edit" data-toggle="tooltip" data-placement="top" class=""><i class="fa fa-pencil"></i></a></li>
                        <# } #>

                    </ul>
                <# }else if( post_status == 'publish' && !is_search){ #>
                    <ul>
                        <li><a href="http://localhost/project/{{=&#32;edit_link}}" target="_blank"  title="Edit" data-toggle="tooltip" data-placement="top" class=""><i class="fa fa-pencil"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="pause" title="Pause" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-pause"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="archive" title="Archive" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-archive"></i></a></li>
                    </ul>
                <# }else if( post_status == 'archive' && !is_search){ #>
                    <ul>
                        <li><a href="project/post-service/index.html%3Fid=%257B%257B=%2520ID%2520%257D%257D.html" title="Renew" data-toggle="tooltip" data-placement="top"><i class="fa fa-refresh"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="delete" title="Delete" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-trash-o"></i></a></li>
                    </ul>
                <# }else if( post_status == 'reject' && !is_search){ #>
                    <ul>
                        <li><a href="http://localhost/project/{{=&#32;edit_link}}" target="_blank" title="Edit" data-toggle="tooltip" data-placement="top" class=""><i class="fa fa-pencil"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="delete" title="Delete" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-trash-o"></i></a></li>
                    </ul>
                <# }else if( post_status == 'pause' && !is_search){ #>
                    <ul>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="unpause" title="Unpause" rel="tooltip" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-play"></i></a></li>
                        <li><a href="http://localhost/project/{{=&#32;edit_link}}" target="_blank" data-action="edit" title="Edit" rel="tooltip" data-toggle="tooltip" data-placement="top" class=""><i class="fa fa-pencil"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="delete" title="Delete" rel="tooltip" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-trash-o"></i></a></li>
                    </ul>
                <# }else if( post_status == 'draft' && !is_search){ #>
                    <ul>
                        <li><a href="project/post-service/index.html%3Fid=%257B%257B=%2520ID%2520%257D%257D.html" title="Submit" data-toggle="tooltip" data-placement="top"><i class="fa fa-arrow-up"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="delete" title="Delete" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-trash-o"></i></a></li>
                    </ul>
                <# }else if(!is_search){ #>
                    <ul>
                        <li><a href="http://localhost/project/{{=&#32;edit_link}}" target="_blank" title="Edit" data-toggle="tooltip" data-placement="top" class=""><i class="fa fa-pencil"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="pause" title="Pause" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-pause"></i></a></li>
                        <li><a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-action="archive" title="Archive" data-toggle="tooltip" data-placement="top" class="action"><i class="fa fa-archive"></i></a></li>
                    </ul>
                <# } #>


            </div>
            <# } #>
        </div>
        <h2 class="name-job"><a href="http://localhost/project/{{=&#32;permalink}}">{{= post_title}}</a></h2>
        <div class="author" title="{{= author_name }}">
            <p><span class="by-author">by</span> {{= author_name}}</p>
        </div>
        <div class="price">
            <span>{{= et_budget_text }}</span>
        </div>
    </div>