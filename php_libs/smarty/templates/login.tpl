<HTML>
<HEAD>
	<TITLE>{$title}</TITLE>
</HEAD>
<BODY>
	<CENTER>
		<HR size="1" noshade>
		<TABLE>
			<TR>
				<TD width="22%">
					<FORM method="post" action="{$SCRIPT_NAME}">
						<TABLE boeder="0" cellpadding="0" cellspacing="0" summary="login form" width="100">
							<TR>
								<TD colspan="2" bgcolor="#eeeeee">
									<B>
										<FONT size="2" bgcolor="#eeeeee">
											会員ページ:
										</FONT>
									</B>
								</TD>
							</TR>
							<TR>
								<B>
									<TD nowrap>
										<FONT size="2">
											{$form.username.label}:	
										</FONT>
									</TD>
								</B>
								<TD>
									{$form.username.html}
								</TD>
							</TR>
							<TR>
								<TD colspan="2">
									<INPUT type="hidden" name="type" value="{$type}">
									<DIV align="center">
										{$form.submit.html}
									</DIV>
									<BR>
									<FONT size="2" color="red">
										{$auth_error_mess}
									</FONT>
								</TD>
							</TR>
						</TABLE>
					</FORM>
				</TD>
				<TD width="78%" align="left" valign="top">
					<P>会員の片はログインしてください。</P>
					<P><<a href="{$SCRIPT_NAME?tyep=regist&action=form">未登録の方はこちらから登録できます。</a></P>
				</TD>
			</TR>
		</TABLE>
	</CENTER>
	{if ($debug_str)}<PRE>{$debug_str}</PRE>{/if}
</BODY>
</HTML>