//load content html
<# if(type == "changelog") { #>
        <div class="changelog-item">
            <div class="changelog-text">
                {{= changelog }}
            </div>

            <div class="message-time">
                {{= post_date }}
            </div>
        </div>
    <# } else { #>
        <div class="{{= message_class }}">
            <div class="img-avatar">
                {{= author_avatar}}
            </div>

            <div class="conversation-text">
                {{= post_content_filtered}}
                <ul>
                    {{= message_attachment }}
                </ul>
            </div>

            <div class="message-time">
                <# if(admin_message == true) { #>
                    <strong>by Admin</strong> - {{= post_date }}
                <# } else { #>
                    {{= post_date }}
                <# } #>
            </div>
        </div>
    <# } #>