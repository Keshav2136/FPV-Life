//<script>
/**
 * Register some init functionality
 * Example user signup,  update check, message boxes etc
 */
Ossn.register_callback('ossn', 'init', 'ossn_startup_functions_compatibility');
Ossn.register_callback('ossn', 'init', 'ossn_image_url_cache');
Ossn.register_callback('ossn', 'init', 'ossn_administrator_update_widget');
Ossn.register_callback('ossn', 'init', 'ossn_administrator_user_delete');
Ossn.register_callback('ossn', 'init', 'ossn_makesure_confirmation');
Ossn.register_callback('ossn', 'init', 'ossn_component_delelte_confirmation');
Ossn.register_callback('ossn', 'init', 'ossn_system_messages');
Ossn.register_callback('ossn', 'init', 'ossn_user_signup_form');
Ossn.register_callback('ossn', 'init', 'ossn_topbar_dropdown');	
/**
 * Setup ajax request for user register
 *
 * @return void
 */
function ossn_user_signup_form(){
	Ossn.ajaxRequest({
		url: Ossn.site_url + "action/user/register",
		form: '#ossn-home-signup',

		beforeSend: function(request){
			var failedValidate = false;
			$('#ossn-submit-button').show();
			$('#ossn-home-signup .ossn-loading').addClass("ossn-hidden");

			$('#ossn-home-signup').find('#ossn-signup-errors').hide();
			$('#ossn-home-signup input').filter(function(){
				$(this).closest('span').removeClass('ossn-required');
				if(this.type == 'radio' && !$(this).hasClass('ossn-field-not-required')){
					if(!$("input[name='gender']:checked").val()){
						$(this).closest('span').addClass('ossn-required');
						failedValidate = true;
					}
				}
				if(this.value == "" && !$(this).hasClass('ossn-field-not-required')){
					$(this).addClass('ossn-red-borders');
					failedValidate = true;
					request.abort();
					return false;
				}
			});
			if(failedValidate == false){
				$('#ossn-submit-button').hide();
				$('#ossn-home-signup .ossn-loading').removeClass("ossn-hidden");
			}
		},
		callback: function(callback){
			if(callback['dataerr']){
				$('#ossn-home-signup').find('#ossn-signup-errors').html(callback['dataerr']).fadeIn();
				$('#ossn-submit-button').show();
				$('#ossn-home-signup .ossn-loading').addClass("ossn-hidden");
			} else if(callback['success'] == 1){
				$('#ossn-home-signup').html(Ossn.MessageDone(callback['datasuccess']));
			} else {
				$('#ossn-home-signup .ossn-loading').addClass("ossn-hidden");
				$('#ossn-submit-button').attr('type', 'submit')
				$('#ossn-submit-button').attr('style', 'opacity:1;');
			}
		}
	});
}
/**
 * Setup system messages
 *
 * @return void
 */
function ossn_system_messages(){
	$(document).ready(function(){
		if($('.ossn-system-messages').find('a').length){
			$('.ossn-system-messages').find('.ossn-system-messages-inner').show();

			setTimeout(function(){
				$('.ossn-system-messages').find('.ossn-system-messages-inner').hide().empty();
			}, 10000);
		}
		//Clicking close in system messages should close it complete #1137
		$('body').on('click', '.ossn-system-messages .close', function(){
			$('.ossn-system-messages').find('.ossn-system-messages-inner').hide().empty();
		});
	});
}
/**
 * Topbar dropdown button
 *
 * @return void
 */
function ossn_topbar_dropdown(){
	$(document).ready(function(){
		$('.ossn-topbar-dropdown-menu-button').click(function(){
			if($('.ossn-topbar-dropdown-menu-content').is(":not(:visible)")){
				$('.ossn-topbar-dropdown-menu-content').show();
			} else {
				$('.ossn-topbar-dropdown-menu-content').hide();
			}
		});

	});
}
/**
 * Show exception on component delete
 *
 * @return void
 */
function ossn_component_delelte_confirmation(){
	$(document).ready(function(){
		//show a confirmation mssage before delete component #444
		$('.ossn-com-delete-button').click(function(e){
			e.preventDefault();
			var del = confirm(Ossn.Print('ossn:component:delete:exception'));
			if(del == true){
				var actionurl = $(this).attr('href');
				window.location = actionurl;
			}
		});
	});
}
/**
 * Show exception , are you sure?
 *
 * @return void
 */
function ossn_makesure_confirmation(){
	$(document).ready(function(){
		$('.ossn-make-sure').click(function(e){
			e.preventDefault();
			var del = confirm(Ossn.Print('ossn:exception:make:sure'));
			if(del == true){
				var actionurl = $(this).attr('href');
				window.location = actionurl;
			}
		});
	});
}
/**
 * Show exception on user delete
 *
 * @return void
 */
function ossn_administrator_user_delete(){
	$(document).ready(function(){
		$('.userdelete').click(function(e){
			e.preventDefault();
			var del = confirm(Ossn.Print('ossn:user:delete:exception'));
			if(del == true){
				var actionurl = $(this).attr('href');
				window.location = actionurl;
			}

		});
	});
}
/**
 * Checks for the updates in administrator panel
 *
 * @return void
 */
function ossn_administrator_update_widget(){
	$(document).ready(function(){
		if($('.avaiable-updates').length){
			Ossn.PostRequest({
				url: Ossn.site_url + "administrator/version",
				action: false,
				callback: function(callback){
					if(callback['version']){
						$('.avaiable-updates').html(callback['version']);
					}
				}
			});
		}
	});
}
/**
 * Add cache tag to the local images
 * 
 * @param string		$callback	ossn
 * @param string		$type		init
 * @param array|object 	$params		null
 *
 * @added in v5.0 
 * @return void
 */
function ossn_image_url_cache($callback, $type, $params){
	$(document).ready(function(){
		if(Ossn.Config.cache.ossn_cache == 1){
			$('img').each(function(){
				var data = $(this).attr('src');
				$site_url = Ossn.ParseUrl(Ossn.site_url);
				var parts = Ossn.ParseUrl(data),
					args = {},
					base = '';
				if(parts['host'] == $site_url['host']){
					if(parts['host'] === undefined){
						if(data.indexOf('?') === 0){
							// query string
							base = '?';
							args = Ossn.ParseStr(parts['query']);
						}
					} else {
						// full or relative URL
						if(parts['query'] !== undefined){
							// with query string
							args = Ossn.ParseStr(parts['query']);
						}
						var split = data.split('?');
						base = split[0] + '?';
					}
					args["ossn_cache"] = Ossn.Config.cache.last_cache;
					$(this).attr('src', base + jQuery.param(args));
				}
			});
		}
	});
}
/**
 * Startup functions support
 * 
 * @param string		$callback	ossn
 * @param string		$type		init
 * @param array|object 	$params		null
 * 
 * @return void
 */
function ossn_startup_functions_compatibility($callback, $type, $params){
	for (var i = 0; i <= Ossn.Startups.length; i++){
		if(typeof Ossn.Startups[i] !== "undefined"){
			Ossn.Startups[i]();
		}
	}
}
/**
 * Initialize ossn startup functions
 *
 * @return void
 */
Ossn.Init = function(){
	Ossn.trigger_callback('ossn', 'init');
};
