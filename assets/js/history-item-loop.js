  //load page html
    <td>{{= payment_method_text }}</td>
    <td>{{= history_time }}</td>
    <td>{{= amount_text }}</td>
    <td class="<# if(history_status == 'completed') { #> successful <# } else if(history_status == 'cancelled') { #> rejected <# } else { #> pending-text <# } #>">{{= history_status_text }}</td>