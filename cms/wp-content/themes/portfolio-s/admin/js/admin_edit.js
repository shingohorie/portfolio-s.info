(function($) {
    var $wp_inline_edit = inlineEditPost.edit;
    
    inlineEditPost.edit = function( id ) {

        $wp_inline_edit.apply( this, arguments );
        //　ピックアップに値を代入
        var $post_id = 0;
        if ( typeof( id ) == 'object' )
            $post_id = parseInt( this.getId( id ) );
 
        if ( $post_id > 0 ) {
            var $edit_row = $( '#edit-' + $post_id );
            var $post_row = $( '#post-' + $post_id );
            var slug = $( ':input[name="post_name"]').val();
            //チェックボックス
            var _val = $( '.column-is_featured > input', $post_row ).prop('checked');
            $(':input[name="is_featured"]', $edit_row ).prop('checked', _val );
        }
        
    };
 
})(jQuery);