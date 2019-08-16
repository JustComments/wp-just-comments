<?php $settings = Just_Comments_Plugin::get_settings(); ?>
<div class="wrap">
    <h2><?php _e( 'JustComments settings page', 'just-comments' ) ?></h2>
    <form method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
		<?php $settings->the_nonce() ?>
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row" valign="top">
					<?php _e( 'Integration Code', 'just-comments' ) ?>
                    <p>
                        <small><?php _e( 'Copy your JustComments integration code here', 'just-comments' ) ?></small>
                    </p>
                </th>
                <td>
                    <label>
                        <textarea name="<?php echo $settings->get_field_name( 'html' ) ?>" cols="50" rows="10" class="large-text code"><?php echo $settings->get_setting( 'html' ) ?></textarea>
                    </label>
                </td>
            </tr>
            </tbody>
        </table>
        <input class="button-primary" type="submit" value="<?php _e( 'Save Settings', 'just-comments' ) ?>"/>
    </form>
</div>
