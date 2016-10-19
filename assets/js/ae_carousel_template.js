//load html elemnt
    <li class="image-item" id="{{= attach_id }}" >
        <span class="img-gallery">
            <a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" data-full="{{= mjob_detail_slider[0] }}" data-id="{{= attach_id }}" class="mjob-img-wrapper"><img title="" data-id="{{= attach_id }}" src="http://localhost/project/{{=&#32;medium_post_thumbnail[0]&#32;}}" /></a>
            <a href="project/wp-login.php%3Faction=logout&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject&amp;_wpnonce=0829950634&amp;redirect_to=http%253A%252F%252Flocalhost%252Fproject.html#" id="mjob-delete-{{=attach_id}}" title="Delete" class="delete-img delete"><i class="fa fa-times"></i></a>
        </span>
        <input title="Click to select a featured image" type="radio" name="featured_image" value="{{= attach_id }}" <# if(typeof is_feature !== "undefined" ) { #> checked="true" <# } #> />
    </li>