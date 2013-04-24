edButtons[edButtons.length] = new edButton( 'line break', 'line break', '<br>', '' );
edButtons[edButtons.length] = new edButton( 'hr', 'hr', '<hr>', '' );
edButtons[edButtons.length] = new edButton( 'Button Standard', 'Button Standard', '<button class="btn btn-large" type="button">', '</button>', '' );
edButtons[edButtons.length] = new edButton( 'Button Blue', 'Button Blue', '<button class="btn btn-large btn-primary" type="button">', '</button>', '' );


QTags.addButton( 'my_id', 'my button', my_callback );
function my_callback() { alert('yeah!'); }
