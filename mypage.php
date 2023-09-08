<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>굿뮤직</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/mypage.css">
</head>

<body>
	</section>
	<header>
		<?php include "header.php"; ?>
	</header>
	<section>
		<div style="width: 1500px; align: center;">
			<table width="1370" border="0" align="center" cellpadding="0" cellspacing="0"
				style="border-top: 2px solid #ff7e50; border-bottom: 1px solid #9b9ca0;">
				<tbody>
					<tr height="125">
						<td valign="bottom" style="padding-bottom: 15px;">
							<font color="#262626" style="font-size:24px; font-weight:bold;">회원 정보</font>
						</td>
					</tr>
				</tbody>
			</table>
			<table width="1370" border="0" align="center" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td width="270" valign="top">
							<table width="100%" height="35" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr height="55">
										<td align="center" valign="bottom" style="padding-bottom:5px">
											<font style="font-size: 16px;" color="black">
												<?php echo "<b>" . $username . "님</b>의 쇼핑 정보" ?>
											</font>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 10px;">
											<table width="100%" border="0" cellpadding="0" cellspacing="0" id="info">
												<tbody>
													<tr height="20">
														<td>
															구매등급</td>
														<td>
															<font>정회원</font>
														</td>
													</tr>
													<tr height="20">
														<td>
															마일리지</td>
														<td>
															<?php echo $userpoint . "점" ?>
														</td>
													</tr>
													<tr height="20">
														<td>쿠폰
														</td>
														<td>0장
														</td>
													</tr>
													<tr height="20">
														<td>나의 문의</td>
														<td><a href="my_qna_list.php">0</a> 건
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<p><br></p>
							<table width="270" border="0" cellspacing="0" cellpadding="0" id="info2"
								style="border-top: 1px solid #e1e1e1;">
								<tbody>
									<tr>
										<td>
											<font>나의 쇼핑내역
											</font>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 10px; padding-left: 30px;"><a>주문/배송조회</a></td>
									</tr>
									<tr>
										<td style="padding-top: 5px; padding-left: 30px;"><a>반품·교환·A/S 내역</a>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 5px; padding-left: 30px;"><a>구매후기 쓰기 </a>
										</td>
									</tr>
									<tr>
										<td>
											<font>나의 문의내역
											</font>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 10px; padding-left: 30px;"><a href="my_qna_list.php">나의
												상품
												Q&amp; A
											</a></td>
									</tr>
									<tr>
										<td>
											<font>나의 회원정보
											</font>
										</td>
									</tr>
									<tr>
										<td style="padding-top: 10px; padding-left: 30px;"><a
												href="member_modify_form.php">회원정보 수정 </a></td>
									</tr>
									<tr>
										<td style="padding-top: 10px; padding-left: 30px;"><a
												href="member_delete_check.php">회원 탈퇴 </a>
										</td>
									</tr>
								</tbody>
							</table>
							<table width="156" height="100%" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>&nbsp;</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td valign="top" style="border-left: 1px solid #e1e1e1;">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tbody>
									<tr>
										<td>
											<table width="100%" border="0" cellspacing="0" cellpadding="0"
												style="background-color: #ff843a; border-bottom: 1px solid #e1e1e1;">
												<tbody>
													<tr height="133">
														<td height="55">
															<table width="100%" border="0" cellspacing="0"
																cellpadding="0">
																<tbody>
																	<tr>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold; font: white;">
																				입금대기</font>
																		</td>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold;">
																				입금확인</font>
																		</td>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold;">
																				예약주문</font>
																		</td>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold;">
																				주문확인</font>
																		</td>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold;">
																				배송준비</font>
																		</td>
																		<td align="center">
																			<font color="#262626"
																				style="font-size: 20px; font-weight: bold;">
																				발송완료</font>
																		</td>

																	</tr>
																	<tr>
																		<td align="center" style="padding-top: 10px;"><a
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>
																		<td align="center" style="padding-top: 10px;"><a
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>
																		<td align="center" style="padding-top: 10px;"><a
																				href="index.php?var=order&amp;list_mode=all&amp;order=17"
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>
																		<td align="center" style="padding-top: 10px;"><a
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>
																		<td align="center" style="padding-top: 10px;"><a
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>
																		<td align="center" style="padding-top: 10px;"><a
																				style="font-size: 24px; font-weight: bold;">0</a>
																		</td>

																	</tr>
																</tbody>
															</table>
														</td>
														<td align="center" width="200">
															<table border="0" cellspacing="0" cellpadding="0">
																<tbody>
																	<tr height="25">
																		<td>
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				반품</font>
																		</td>
																		<td style="padding-left: 10px;">
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				0</font>
																		</td>
																	</tr>
																	<tr height="25">
																		<td>
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				교환</font>
																		</td>
																		<td style="padding-left: 10px;">
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				0</font>
																		</td>
																	</tr>
																	<tr height="25">
																		<td>
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				A/S</font>
																		</td>
																		<td style="padding-left: 10px;">
																			<font color="#262626"
																				style="font-size: 16px; font-weight: bold;">
																				0</font>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr height="20">
										<td style="padding-left: 40px;">
										</td>
									</tr>
								</tbody>
							</table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td height="40" align="center">
										</td>
									</tr>
								</tbody>
							</table>
							<br><br><br>
							<br>

						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<footer>
		<?php include "footer.php"; ?>
	</footer>
</body>

</html>