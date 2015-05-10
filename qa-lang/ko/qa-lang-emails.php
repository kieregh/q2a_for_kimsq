<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	File: qa-include/qa-lang-emails.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "^site_title 에 등록한 회원님의 답변에 ^c_handle 님에 의해 새 의견이 등록되었습니다.:\n\n^open^c_content^close\n\n회원님의 답변:\n\n^open^c_context^close\n\n아래의 링크를 통해 회원님의 의견을 추가할 수 있습니다. :\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_commented_subject' => '회원님의 ^site_title 답변에 새로운 의견이 등록되었습니다.',

		'a_followed_body' => "^site_title 에 등록한 회원님의 답변에 ^c_handle 님에 의해 새 관련질문이 등록되었습니다.:\n\n^open^q_title^close\n\n회원님의 답변:\n\n^open^a_content^close\n\n새 질문을 보려면 아래 링크를 클릭하세요:\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_followed_subject' => '회원님의 ^site_title 답변에 새로운 관련질문이 등록되었습니다.',

		'a_selected_body' => "축하합니다! ^site_title 에 등록한 회원님의 답변이 ^s_handle 님에 의해 베스트 답변으로 선택되었습니다.:\n\n^open^a_content^close\n\n아래의 질문이었습니다.:\n\n^open^q_title^close\n\n회원님의 답변을 보려련 아래의 링크를 클릭해주세요:\n\n^url\n\n감사합니다,\n\n^site_title",
		'a_selected_subject' => '회원님의 ^site_title 답변이 선택되었습니다!',

		'c_commented_body' => "^site_title 에 회원님이 의견을 등록한 후 ^c_handle 에 의해 새로운 의견이 추가되었습니다. :\n\n^open^c_content^close\n\n논의 내용은 아래와 같습니다.:\n\n^open^c_context^close\n\n또 다른 의견을 추가할 수 있습니다.:\n\n^url\n\n감사합니다,\n\n^site_title",
		'c_commented_subject' => '회원님의 ^site_title 의견에 새로운 의견이 추가되었습니다.',

		'confirm_body' => "에 필요한 이메일 인증을 위해 아래의 링크를 클릭해주세요.\n\n^url\n\n감사합니다,\n^site_title",
		'confirm_subject' => '^site_title - 이메일 인증',

		'feedback_body' => "의견:\n^message\n\n이름:\n^name\n\nEmail:\n^email\n\n이전 페이지:\n^previous\n\n사용자:\n^url\n\nIP 주소:\n^ip\n\n브라우저:\n^browser",
		'feedback_subject' => '^ 피드백',

		'flagged_body' => "^p_handle 님이 등록한 포스트가 플래그를 받았습니다.:\n\n^open^p_context^close\n\n해당 포스트를 보려면 아래의 링크를 클릭해주세요:\n\n^url\n\n\n모든 플래깅된 포스트를 보려면 아래의 링크를 클릭하세요:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'flagged_subject' => '^site_title 포스트가 플래그를 받았습니다.',

		'moderate_body' => "^p_handle 님의 포스트가 당신의 승인을 요청합니다.:\n\n^open^p_context^close\n\n포스트 승인 혹은 거절을 하기 위해서 아래의 링크를 클릭해주세요:\n\n^url\n\n\n대기중인 모든 포스트를 보려면 아래 링크를 클릭해주세요:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'moderate_subject' => '^site_title 포스트 승인요청',

		'new_password_body' => "^site_title 에 사용할 회원님의 새로운 패스워드는 아래와 같습니다.\n\n패스워드: ^password\n\n로그인 후 즉시 패스워드를 변경하는 것을 권장합니다.\n\n감사합니다,\n^site_title\n^url",
		'new_password_subject' => '^site_title - 회원님의 새로운 패스워드',

		'private_message_body' => "^site_title ^f_handle 님에 의해 새로운 메세지가 도착했습니다.:\n\n^open^message^close\n\n^more 감사합니다,\n\n^site_title\n\n\n메세지를 차단하려면 아래의 계정페이지를 방문해주세요:\n^a_url",
		'private_message_info' => "^f_handle 님에 대한 추가정보:\n\n^url\n\n",
		'private_message_reply' => "^f_handle 메세지로 답변을 하려면 아래 링크를 클릭해주세요:\n\n^url\n\n",
		'private_message_subject' => '^site_title ^f_handle 님에 의해 새로운 메세지가 도착했습니다',

		'q_answered_body' => "^site_title 에 등록된 회원님의 질문에 ^a_handle 님이 답변을 등록했습니다.:\n\n^open^a_content^close\n\n회원님의 질문:\n\n^open^q_title^close\n\n이 답변에 만족하면 베스트 답변으로 선택할 수 있습니다.:\n\n^url\n\n감사합니다,\n\n^site_title",
		'q_answered_subject' => '회원님의 ^site_title 질문에 답변이 등록되었습니다.',

		'q_commented_body' => "^site_title 에 등록된 회원님의 질문에 ^a_handle 님이 의견을 등록했습니다.:\n\n^open^c_content^close\n\n회원님의 질문:\n\n^open^c_context^close\n\n회원님의 의견을 추가할 수 있습니다.:\n\n^url\n\n감사합니다,\n\n^site_title",
		'q_commented_subject' => 'Y회원님의 ^site_title 질문에 의견이 등록되었습니다.',

		'q_posted_body' => "새로운 질문이 ^q_handle 에 의해서 등록되었습니다.:\n\n^open^q_title\n\n^q_content^close\n\n해당 질문을 보려면 아래의 링크를 클릭해주세요:\n\n^url\n\n감사합니다.,\n\n^site_title",
		'q_posted_subject' => '^site_title 에 새로운 질문이 등록되었습니다.',

		'remoderate_body' => "^p_handle 님의 수정된 포스트가 당신의 승인을 재요청합니다.:\n\n^open^p_context^close\n\n수정된 포스트를 승인 or 숨김처리 하려면 아래의 링크를 클릭해주세요:\n\n^url\n\n\n대기중인 모든 포스트를 보려면 아래 링크 클릭:\n\n^a_url\n\n\n감사합니다,\n\n^site_title",
		'remoderate_subject' => '^site_title 승인 요청',

		'reset_body' => "^site_title 에 사용할 패스워드를 재설정하기 위해서 아래의 링크를 클릭해주세요.\n\n^url\n\n아니며, 아래의 코드를 제공된 입력창에 입력해주세요.\n\nCode: ^code\n\n만약 패스워드 재설정을 원하지 않으면 이 메세지는 무시하세요.\n\n감사합니다,\n^site_title",
		'reset_subject' => '^site_title -  잊어버린 패스워드 재 설정',

		'to_handle_prefix' => "^,\n\n",

		'u_registered_body' => "^u_handle 로 새로운 사용자가 등록되었습니다.\n\n해당 사용자의 프로필을 보려면 아래 링크를 클릭해주세요:\n\n^url\n\n감사합니다,\n\n^site_title",
		'u_registered_subject' => '^site_title 새로운 사용자가 등록되었습니다.',
		'u_to_approve_body' => "^u_handle 로 새로운 사용자가 등록되었습니다.\n\n상요자 승인을 위해서 아래의 링크를 클릭해주세요:\n\n^url\n\n승인 대기 중인 모드 사용자를 보려면 아래 링크를 클릭해주세요:\n\n^a_url\n\n감사합니다,\n\n^site_title",

		'u_approved_body' => "새로운 사용자 프로필은 여기서 볼 수 있습니다.:\n\n^url\n\n감사합니다,\n\n^site_title",
		'u_approved_subject' => '^site_title 사용자가 승인되었습니다.',

		'wall_post_body' => "^site_title 에서 ^f_handle 님이 사용자 담벼락에 글을 등록했습니다. :\n\n^open^post^close\n\n여기서 글에 대한 응답을 할 수 있습니다.:\n\n^url\n\n감사합니다,\n\n^site_title",
		'wall_post_subject' => '^site_title 담벼락에 글이 등록되었습니다',

		'welcome_body' => "^site_title 에 가입해주셔서 감사합니다.\n\n^custom^confirm회원님의 로그인 상세내역은 아래와 같습니다.:\n\n사용자 아이디: ^handle\nEmail: ^email\n\n향후 참고할 수 있도록 이 정보를 안전하게 보관하세요.\n\n감사합니다,\n\n^site_title\n^url",
		'welcome_confirm' => "회원님의 이메일 주소에 대한 인증을 받기 위해서 아래의 링크를 클릭해주세요.\n\n^url\n\n",
		'welcome_subject' => '^site_title 에 오신 것을 환영합니다!',
	);


/*
	Omit PHP closing tag to help avoid accidental output
*/

	?>