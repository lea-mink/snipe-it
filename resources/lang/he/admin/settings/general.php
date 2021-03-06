<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'תחום Active Directory',
    'ad_domain_help'			=> 'לפעמים זה זהה לדומיין הדוא"ל שלך, אך לא תמיד.',
    'is_ad'				        => 'זהו שרת Active Directory',
	'alert_email'				=> 'שלח התראות אל',
	'alerts_enabled'			=> 'התראות מופעלות',
	'alert_interval'			=> 'התראות שפג תוקפן (בימים)',
	'alert_inv_threshold'		=> 'סף התראה על מלאי',
	'asset_ids'					=> 'מזהי נכסים',
	'audit_interval'            => 'מרווח ביקורת',
    'audit_interval_help'       => 'אם אתה נדרש באופן קבוע לביקורת פיזית של הנכסים שלך, הזן את מרווח בחודשים.',
	'audit_warning_days'        => 'סף אזהרות ביקורת',
    'audit_warning_days_help'   => 'כמה ימים מראש עלינו להזהיר אותך כאשר הנכסים צפויים לביקורת?',
	'auto_increment_assets'		=> 'צור מזהי נכסים שמגדלים אוטומטית',
	'auto_increment_prefix'		=> 'קידומת (אופציונלי)',
	'auto_incrementing_help'    => 'הפעל תחילה מזהי נכס שמגדילים אוטומטית כדי להגדיר זאת',
	'backups'					=> 'גיבויים',
	'barcode_settings'			=> 'הגדרות ברקוד',
    'confirm_purge'			    => 'אשר את הטיהור',
    'confirm_purge_help'		=> 'הזן את הטקסט "DELETE" בתיבה למטה כדי לנקות את הרשומות שנמחקו. לא ניתן לבטל פעולה זו.',
	'custom_css'				=> 'CSS מותאם אישית',
	'custom_css_help'			=> 'הזן כל דריסת CSS מותאמת אישית שבה תרצה להשתמש. אל תכלול את התגים &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'מטבע ברירת מחדל',
	'default_eula_text'			=> 'ברירת מחדל ל- EULA',
  'default_language'			=> 'שפת ברירת מחדל',
	'default_eula_help_text'	=> 'ניתן גם לשייך ערכי רשיון קצה מותאמים אישית לקטגוריות ספציפיות של נכסים.',
    'display_asset_name'        => 'שם נכס לתצוגה',
    'display_checkout_date'     => 'הצג תאריך יציאה',
    'display_eol'               => 'הצג EOL בתצוגת טבלה',
    'display_qr'                => 'הצג קודי מרובע',
	'display_alt_barcode'		=> 'הצגת ברקוד 1D',
	'barcode_type'				=> 'סוג ברקוד דו-ממדי',
	'alt_barcode_type'			=> 'סוג 1D ברקוד',
    'eula_settings'				=> 'הגדרות EULA',
    'eula_markdown'				=> 'הסכם רשיון משתמש זה מאפשר <a href="https://help.github.com/articles/github-flavored-markdown/">Github בטעם מרקדון </a>.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings'			=> 'הגדרות כלליות',
	'generate_backup'			=> 'צור גיבוי',
    'header_color'              => 'צבע כותרת',
    'info'                      => 'הגדרות אלה מאפשרות לך להתאים אישית היבטים מסוימים של ההתקנה.',
    'laravel'                   => 'גירסת Laravel',
    'ldap_enabled'              => 'LDAP מופעל',
    'ldap_integration'          => 'שילוב LDAP',
    'ldap_settings'             => 'הגדרות LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'שרת LDAP',
    'ldap_server_help'          => 'זה צריך להתחיל עם ldap: // (עבור לא מוצפן או TLS) או ldaps: // (עבור SSL)',
	'ldap_server_cert'			=> 'אימות תעודת SSL של LDAP',
	'ldap_server_cert_ignore'	=> 'אפשר אישור SSL לא חוקי',
	'ldap_server_cert_help'		=> 'בחר בתיבת סימון זו אם אתה משתמש ב- SSL עם חתימה עצמית וברצונך לקבל אישור SSL לא חוקי.',
    'ldap_tls'                  => 'השתמש ב- TLS',
    'ldap_tls_help'             => 'יש לבדוק זאת רק אם אתה מפעיל את STARTTLS בשרת LDAP שלך.',
    'ldap_uname'                => 'שם משתמש של LDAP',
    'ldap_pword'                => 'קישור סיסמה LDAP',
    'ldap_basedn'               => 'בסיס Bind DN',
    'ldap_filter'               => 'מסנן LDAP',
    'ldap_pw_sync'              => 'סינכרון סיסמת LDAP',
    'ldap_pw_sync_help'         => 'בטל את הסימון בתיבה זו אם אינך רוצה לשמור את סיסמאות LDAP המסונכרנות עם סיסמאות מקומיות. השבתה זו פירושה שהמשתמשים שלך לא יוכלו להתחבר אם שרת ה- LDAP שלך אינו ניתן להשגה מסיבה כלשהי.',
    'ldap_username_field'       => 'שם משתמש',
    'ldap_lname_field'          => 'שם משפחה',
    'ldap_fname_field'          => 'שם פרטי של LDAP',
    'ldap_auth_filter_query'    => 'שאילתת אימות LDAP',
    'ldap_version'              => 'גרסת LDAP',
    'ldap_active_flag'          => 'LDAP סמל פעיל',
    'ldap_emp_num'              => 'מספר עובד LDAP',
    'ldap_email'                => 'דוא"ל LDAP',
    'license'                  => 'Software License',
    'load_remote_text'          => 'סקריפטים מרחוק',
    'load_remote_help_text'		=> 'זה Snipe-IT להתקין יכול לטעון סקריפטים מהעולם החיצון.',
    'login_note'                => 'הערה התחברות',
    'login_note_help'           => 'אופציונלי לכלול כמה משפטים במסך הכניסה שלך, למשל כדי לעזור לאנשים שמצאו מכשיר אבוד או נגנב. השדה הזה מקבל <a href="https://help.github.com/articles/github-flavored-markdown/">Github בטעם מרקדון </a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If filled users will get redirected to this URL after the Session of SnipeIT is closed (Logout). This is usefull to close the user sessions of your Authenticationprovider correctly.',
    'logo'                    	=> 'סֵמֶל',
    'full_multiple_companies_support_help_text' => 'הגבלת משתמשים (כולל מנהלי מערכת) שהוקצו לחברות לנכסי החברה שלהם.',
    'full_multiple_companies_support_text' => 'תמיכה מלאה חברות מרובות',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'אופציונאלי',
    'per_page'                  => 'תוצאות לעמוד',
    'php'                       => 'גרסת PHP',
    'php_gd_info'               => 'עליך להתקין את PHP-gd כדי להציג קודי QR, ראה הוראות התקנה.',
    'php_gd_warning'            => 'עיבוד תמונה PHP ותוסף GD אינו מותקן.',
    'pwd_secure_complexity'     => 'מורכבות סיסמה',
    'pwd_secure_complexity_help' => 'בחר את הכללים המורכבים של סיסמאות שברצונך לאכוף.',
    'pwd_secure_min'            => 'תווים מינימליים לסיסמה',
    'pwd_secure_min_help'       => 'הערך המינימלי המותר הוא 5',
    'pwd_secure_uncommon'       => 'מנע סיסמאות נפוצות',
    'pwd_secure_uncommon_help'  => 'פעולה זו לא תאפשר למשתמשים להשתמש בסיסמאות נפוצות מתוך 10,000 הסיסמאות המובילות שדווחו על הפרות.',
    'qr_help'                   => 'הפעל תחילה קודי QR כדי להגדיר זאת',
    'qr_text'                   => 'טקסט קוד QR',
    'setting'                   => 'הגדרה',
    'settings'                  => 'הגדרות',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'שם אתר',
    'slack_botname'             => 'שם בוטני',
    'slack_channel'             => 'ערוץ רפה',
    'slack_endpoint'            => 'נקודת הקצה המרוחקת',
    'slack_integration'         => 'הגדרות רפוי',
    'slack_integration_help'    => 'אינטגרציה חלשה היא אופציונלית, אך נקודת הקצה והערוץ נדרשות אם ברצונך להשתמש בה. כדי להגדיר את האינטגרציה החלשה, עליך תחילה ליצור <a href=":slack_link" target="_new"> יצירת webhook</a> נכנסת בחשבון ה- Slack שלך.',
    'slack_integration_help_button'    => 'Once you have saved your Slack information, a test button will appear.',
    'slack_test_help'           => 'Test whether your Slack integration is configured correctly. YOU MUST SAVE YOUR UPDATED SLACK SETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT גירסה',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'system'                    => 'מידע מערכת',
    'update'                    => 'עדכן הגדרות',
    'value'                     => 'ערך',
    'brand'                     => 'מיתוג',
    'about_settings_title'      => 'על הגדרות',
    'about_settings_text'       => 'הגדרות אלה מאפשרות לך להתאים אישית היבטים מסוימים של ההתקנה.',
    'labels_per_page'           => 'תוויות לדף',
    'label_dimensions'          => 'מידות תווית (אינצ\'ים)',
    'next_auto_tag_base'        => 'הבא-תוספת אוטומטית',
    'page_padding'             => 'שולי דף (אינצ\'ים)',
    'purge'                    => 'טיהור רשומות שנמחקו',
    'labels_display_bgutter'    => 'תווית מרזב תחתון',
    'labels_display_sgutter'    => 'תווית בצד תווית',
    'labels_fontsize'           => 'גודל גופן של תווית',
    'labels_pagewidth'          => 'רוחב גיליון תווית',
    'labels_pageheight'         => 'גובה גיליון תווית',
    'label_gutters'        => 'תווית ריווח (אינצ\'ים)',
    'page_dimensions'        => 'מידות דף (אינצ\'ים)',
    'label_fields'          => 'תייג שדות גלויים',
    'inches'        => 'אינץ',
    'width_w'        => 'w',
    'height_h'        => 'ח',
    'show_url_in_emails'                => 'קישור לצלוף- IT ב הודעות דוא"ל',
    'show_url_in_emails_help_text'      => 'בטל את הסימון בתיבה זו אם אינך רוצה לקשר חזרה את ההתקנה Snipe-IT שלך תחתונות הדוא"ל. שימושי אם רוב המשתמשים שלך לא מתחברים.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'גובה מקסימלי לתמונה ממוזערת',
    'thumbnail_max_h_help'   => 'גובה מקסימלי בפיקסלים שמוצגות תמונות ממוזערות בתצוגת הרישום. מינימום 25, מקסימום 500.',
    'two_factor'        => 'אימות שני גורמים',
    'two_factor_secret'        => 'קוד שני פקטור',
    'two_factor_enrollment'        => 'רישום שני גורמים',
    'two_factor_enabled_text'        => 'הפעל שני גורמים',
    'two_factor_reset'        => 'אפס סודי פקטור',
    'two_factor_reset_help'        => 'פעולה זו תאלץ את המשתמש לרשום שוב את המכשיר באמצעות Google Authenticator. זה יכול להיות שימושי אם המכשיר נרשם כעת אבד או נגנב.',
    'two_factor_reset_success'          => 'שני מכשיר גורם לאפס בהצלחה',
    'two_factor_reset_error'          => 'איפוס התקן שני גורמים נכשל',
    'two_factor_enabled_warning'        => 'הפעלת שני גורמים אם היא אינה מופעלת כעת תאלץ אותך מיד לבצע אימות באמצעות מכשיר רשום של Google Auth. תהיה לך אפשרות לרשום את המכשיר שלך אם אינך רשום כעת.',
    'two_factor_enabled_help'        => 'פעולה זו תפעיל אימות דו-גורמי באמצעות המאמת של Google.',
    'two_factor_optional'        => 'סלקטיבית (משתמשים יכולים להפעיל או להשבית אם מותר)',
    'two_factor_required'        => 'נדרש עבור כל המשתמשים',
    'two_factor_disabled'        => 'נָכֶה',
    'two_factor_enter_code'	=> 'הזן קוד שני פקטורים',
    'two_factor_config_complete'	=> 'שלח קוד',
    'two_factor_enabled_edit_not_allowed' => 'מנהל המערכת אינו מאפשר לך לערוך הגדרה זו.',
    'two_factor_enrollment_text'	=> "יש צורך באימות שני גורמים, אך המכשיר עדיין לא נרשם. פתח את אפליקציית המאמת של Google וסרוק את קוד QR שלהלן כדי לרשום את המכשיר שלך. לאחר שתירשם את המכשיר, הזן את הקוד הבא",
    'require_accept_signature'      => 'דרוש חתימה',
    'require_accept_signature_help_text'      => 'הפעלת תכונה זו תדרוש ממשתמשים להיכנס פיזית בעת קבלת נכס.',
    'left'        => 'שמאלה',
    'right'        => 'ימין',
    'top'        => 'חלק עליון',
    'bottom'        => 'תַחתִית',
    'vertical'        => 'אֲנָכִי',
    'horizontal'        => 'אופקי',
    'zerofill_count'        => 'אורך תגי הנכסים, כולל zerofill',
);
