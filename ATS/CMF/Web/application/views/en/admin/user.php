<div class="main">
	<div class="container">
		<h1>{users_text}</h1>

		<div class="container separated">
			<h2>{users_list_text}</h2>		
			<?php echo form_open(get_link("admin_user"),array()); ?>
				<input type="hidden" name="post_type" value="users_list" />
				<?php foreach($users_info as $user) {?>
					<div class="row even-odd-bg" >
						<div class="two columns">
							<label>{email_text}</label>
							<?php echo $user['user_email'];?>
						</div>
						<div class="three columns">
							<label>{new_password_text}</label>
							<input name="pass_user_id_<?php echo $user['user_id']?>" type="password" class="ltr eng full-width"/>
						</div>
						<div class="three columns">
							<label>{name_text}</label>
							<input value="<?php echo $user['user_name']?>" name="name_user_id_<?php echo $user['user_id']?>"  class="full-width"/>
						</div>
						<div class="two columns">
							<label>{code_text}</label>
							<input value="<?php echo $user['user_code']?>" name="code_user_id_<?php echo $user['user_id']?>"  class="full-width"/>
						</div>

						<div class="two columns">
							<label>{delete_text} </label>
							<input name="delete_user_id_<?php echo $user['user_id']?>" type="checkbox" class="graphical" />
						</div>
					</div>
				<?php } ?>
				<br><br>
				<div class="row">
						<div class="four columns">&nbsp;</div>
						<input type="submit" class=" button-primary four columns" value="{submit_text}"/>
				</div>				
			</form>
		</div>

		<div class="container separated">
			<h2>{add_user_text}</h2>	
			<?php echo form_open(get_link("admin_user"),array()); ?>
				<input type="hidden" name="post_type" value="add_user" />	
				<div class="row even-odd-bg" >
					<div class="three columns">
						<label>{email_text}</label>
						<input type="text" name="email" class="ltr eng full-width" />
					</div>
					<div class="three columns">
						<label>{password_text}</label>
						<input type="password" name="password" class="ltr eng full-width"/>
					</div>
					<div class="three columns">
						<label>{name_text}</label>
						<input type="text" name="name" class="full-width"/>
					</div>
					<div class="three columns">
						<label>{code_text}</label>
						<input type="text" name="code" class="full-width"/>
					</div>
				</div>
				<div class="row">
						<div class="four columns">&nbsp;</div>
						<input type="submit" class=" button-primary four columns" value="{add_text}"/>
				</div>				
			</form>
		</div>

	</div>
</div>