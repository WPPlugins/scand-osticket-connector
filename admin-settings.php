<div class="wrap">
	<h1><?php _e(SCAND_OST_CONNECTOR_TITLE); ?></h1>
	<?php settings_errors(); ?>
	<h2><?php _e('API Settings', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></h2>
	<form method="post" class="validate" novalidate="novalidate">
		<?php settings_fields(SCAND_OST_CONNECTOR_OPTION_PAGE); ?>
		<table class="form-table">
			<tr class="form-required">
				<th scope="row">
					<label for="scand_osticket_config_url">
                        <?php _e('URL', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[url]" type="text" id="scand_osticket_config_url" value="<?php echo $this->getConfig('url'); ?>" class="regular-text" />
					<p class="description" id="tagline-description"><?php _e('URL to /api/tickets.json') ?></p>
                    </div>
                </td>
			</tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_key">
                        <?php _e('API Key', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[key]" type="text" id="scand_osticket_config_key" value="<?php echo $this->getConfig('key'); ?>" class="regular-text" />
                        <p class="description" id="tagline-description">
                            <?php _e('Please log into osticket as an admin and navigate to: Admin panel -> Manage -> Api Keys then add a new API Key.', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?>
                        </p>
                    </div>
                </td>
			</tr>

		</table>
		<h2><?php _e('Ticket Settings', SCAND_OST_CONNECTOR_TEXTDOMAIN) ?></h2>
		<p><?php _e('Please provide values of form inputs name attribute which used on the contact form.', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></p>
		<table class="form-table">
            <tr class="form-required">
                <th scope="row">
                    <label for="scand_osticket_config_form_name">
                        <?php _e('Form Identifier', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
                <td>
                    <div>
                        <input name="scand_osticket_config[form_name]" type="text" id="scand_osticket_config_form_name" value="<?php echo $this->getConfig('form_name'); ?>" class="regular-text" />
                        <p class="description" id="tagline-description"><?php _e('Please provide a unique form identifier', SCAND_OST_CONNECTOR_TEXTDOMAIN) ?></p>
                    </div>
                </td>
            </tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_topic">
                        <?php _e('Help Topic', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[topic]" type="text" id="scand_osticket_config_topic" value="<?php echo $this->getConfig('topic'); ?>" class="regular-text" />
					</div>
                </td>
			</tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_email">
                        <?php _e('Email', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[email]" type="text" id="scand_osticket_config_email" value="<?php echo $this->getConfig('email'); ?>" class="regular-text" />
					</div>
                </td>
			</tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_name">
                        <?php _e('Full Name', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[name]" type="text" id="scand_osticket_config_name" value="<?php echo $this->getConfig('name'); ?>" class="regular-text" />
					</div>
                </td>
			</tr>
			<tr>
				<th scope="row">
                    <label for="scand_osticket_config_phone"><?php _e('Phone', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></span></label>
                </th>
				<td>
                    <input name="scand_osticket_config[phone]" type="text" id="scand_osticket_config_phone" value="<?php echo $this->getConfig('phone'); ?>" class="regular-text" />
                </td>
			</tr>
			<tr>
				<th scope="row">
                    <label for="scand_osticket_config_phone_ext"><?php _e('Phone Ext', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></span></label>
                </th>
				<td>
                    <input name="scand_osticket_config[phone_ext]" type="text" id="scand_osticket_config_phone_ext" value="<?php echo $this->getConfig('phone_ext'); ?>" class="regular-text" />
				</td>
			</tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_subject"><?php _e('Subject', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span></label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[subject]" type="text" id="scand_osticket_config_subject" value="<?php echo $this->getConfig('subject'); ?>" class="regular-text" />
					</div>
                </td>
			</tr>
			<tr class="form-required">
				<th scope="row">
                    <label for="scand_osticket_config_message">
                        <?php _e('Message', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?> <span class="description"><?php _e('(required)'); ?></span>
                    </label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[message]" type="text" id="scand_osticket_config_message" value="<?php echo $this->getConfig('message'); ?>" class="regular-text" />
					</div>
                </td>
			</tr>
			<tr>
				<th scope="row">
                    <label for="scand_osticket_config_attachments"><?php _e('Attachments', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></label>
                </th>
				<td>
                    <div>
                        <input name="scand_osticket_config[attachments]" type="text" id="scand_osticket_config_attachments" value="<?php echo $this->getConfig('attachments'); ?>" class="regular-text" />
					    <p class="description" id="tagline-description"><?php _e('You can specify several fields separated by a comma', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></p>
                    </div>
                </td>
			</tr>
			<tr>
				<th scope="row">
                    <label for="scand_osticket_config_priority"><?php _e('Priority Level', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></label>
                </th>
				<td>
                    <select name="scand_osticket_config[priority]" id="scand_osticket_config_priority">
					<option value="1"<?php echo $this->getConfig('priority') == 1 ? ' selected="selected"' : '' ?>><?php _e('Low'); ?></option>
					<option value="2"<?php echo $this->getConfig('priority') == 2 ? ' selected="selected"' : '' ?>><?php _e('Normal'); ?></option>
					<option value="3"<?php echo $this->getConfig('priority') == 3 ? ' selected="selected"' : '' ?>><?php _e('High'); ?></option>
					<option value="4"<?php echo $this->getConfig('priority') == 4 ? ' selected="selected"' : '' ?>><?php _e('Emergency'); ?></option>
				</select>
                </td>
			</tr>
		</table>
		<h2><?php _e('Log Settings', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?></h2>
		<table class="form-table">
			<tr>
				<th scope="row">
                    <?php _e('Enable logging', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?>
                </th>
				<td>
                    <fieldset>
                        <legend class="screen-reader-text">
                            <span><?php _e('Enable logging', SCAND_OST_CONNECTOR_TEXTDOMAIN) ?></span>
                        </legend>
                        <label for="scand_osticket_config[log_enable]">
                            <input name="scand_osticket_config[log_enable]" type="checkbox" id="scand_osticket_config_log_enable" value="1" <?php checked('1', $this->getConfig('log_enable')); ?> />
							<?php _e('Saves result of creation of ticket into log file', SCAND_OST_CONNECTOR_TEXTDOMAIN); ?>
                        </label>
					</fieldset>
                </td>
			</tr>
		</table>
		<?php submit_button(); ?>
	</form>
</div>
