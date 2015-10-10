<?php
header("Access-Control-Allow-Origin: *");
chdir('..');
include_once '../epi/Epi.php';
Epi::setPath('base', '../epi');
Epi::init('api');
Epi::init('route', 'database');
EpiDatabase::employ('mysql','muhanhyodo','localhost','muhanhyodo','angksgyeh2015'); 
// type = mysql, database = mysql, host = localhost, user = root, password = [empty]
// Epi::init('base','cache','session');

// 공지사항_글
getRoute()->get('/address/?(\d+)', 'apiAddress', EpiApi::external);



// 공지사항 
getRoute()->get('/address/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiNotices', EpiApi::external);

getRoute()->post('/test', 'apiTest', EpiApi::external);

// 학교 공통 정보
getRoute()->get('/school', 'apiSchool', EpiApi::external);

// 미림인미디어
//getRoute()->get('/news', 'apiNews', EpiApi::external);
//getRoute()->get('/news/?', 'apiNews', EpiApi::external);
getRoute()->get('/news/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiNews', EpiApi::external);
//getRoute()->get('/news/?(\d+)/?(\d+)', 'apiNews', EpiApi::external);
//getRoute()->get('/news/?(\d+)/?(\d+)/?(writer|content)/?(.+)', 'apiNews', EpiApi::external);

// 입학설명회 
getRoute()->get('/admission/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiAdmissionAdmission', EpiApi::external);

// 진로체험교실
getRoute()->get('/exp/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiAdmissionExp', EpiApi::external);

// 입학상담 QNA
getRoute()->get('/qna/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiAdmissionQNA', EpiApi::external);

// 공지사항 
getRoute()->get('/notices/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiNotices', EpiApi::external);

// 교육계획 
getRoute()->get('/eduplans/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiEduplans', EpiApi::external);

// 평가계획 
getRoute()->get('/evalplans/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiEvalplans', EpiApi::external);

// 고사원안 
getRoute()->get('/testpapers/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiTestpapers', EpiApi::external);


// 협력업체정보
getRoute()->get('/jobcompanies', 'apiJobCompanies', EpiApi::external);
getRoute()->get('/jobcompanies/', 'apiJobCompanies', EpiApi::external);
getRoute()->get('/jobcompanies/?(\d+)', 'apiJobCompanies', EpiApi::external);
getRoute()->get('/jobcompanies/?(\d+)/?(\d+)', 'apiJobCompanies', EpiApi::external);
getRoute()->get('/jobcompanies/?(\d+)/?(\d+)/?(writer|content)/?(.+)', 'apiJobCompanies', EpiApi::external);

// 취업의뢰게시판
getRoute()->get('/jobasks', 'apiJobAsks', EpiApi::external);
getRoute()->get('/jobasks/', 'apiJobAsks', EpiApi::external);
getRoute()->get('/jobasks/?(\d+)', 'apiJobAsks', EpiApi::external);
getRoute()->get('/jobasks/?(\d+)/?(\d+)', 'apiJobAsks', EpiApi::external);
getRoute()->get('/jobasks/?(\d+)/?(\d+)/?(writer|content)/?(.+)', 'apiJobAsks', EpiApi::external);

// 취업체험사례
getRoute()->get('/jobexps', 'apiJobExps', EpiApi::external);
getRoute()->get('/jobexps/', 'apiJobExps', EpiApi::external);
getRoute()->get('/jobexps/?(\d+)', 'apiJobExps', EpiApi::external);
getRoute()->get('/jobexps/?(\d+)/?(\d+)', 'apiJobExps', EpiApi::external);
getRoute()->get('/jobexps/?(\d+)/?(\d+)/?(writer|content)/?(.+)', 'apiJobExps', EpiApi::external);

// 재학생게시판 
getRoute()->get('/studentboard/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiStudentboard', EpiApi::external);

// 가정통신문
getRoute()->get('/parents/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiParents', EpiApi::external);

// 자유게시판
getRoute()->get('/freeboard/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiFreeBoard', EpiApi::external);

// 졸업생게시판 
getRoute()->get('/graduates/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiGraduates', EpiApi::external);

// 상담란
getRoute()->get('/advices/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiAdvices', EpiApi::external);

// 학교급식정보
getRoute()->get('/schoolmeals/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiSchoolmeals', EpiApi::external);

// 영양게시판
getRoute()->get('/nutritions/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiNutritions', EpiApi::external);

//학교운영위원회
getRoute()->get('/offices/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiOffices', EpiApi::external);

// 학교평가결과
getRoute()->get('/schoolevalresults/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiSchoolEvalResults', EpiApi::external);

// 학교평가계획
getRoute()->get('/schoolevalplans/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiSchoolEvalPlans', EpiApi::external);


/*
 *  교육활동 
 */
// 공지사항_글
getRoute()->get('/notice/?(\d+)', 'apiNotice', EpiApi::external);

// 이미림뉴스 
getRoute()->get('/emirimnews/?(\d+)?/?(\d+)?/?(writer|content)?/?(.+)?', 'apiEmirimnews', EpiApi::external);

// 메뉴 리스트
getRoute()->get('/menu', 'apiMenu', EpiApi::external);
getRoute()->get('/menu/?(\d+)', 'apiMenu', EpiApi::external);

// 퀵메뉴 리스트
getRoute()->get('/quickmenu', 'apiQuickMenu', EpiApi::external);

// 팝업 리스트
getRoute()->get('/popup', 'apiPopup', EpiApi::external);

getRoute()->get('/', 'showEndpoints');



getRoute()->get('/gatong', 'showGatong');
getRoute()->get('/photo/random', 'showPhotoRandom', EpiApi::external);

getRoute()->get('/photo', 'showPhoto');
getApi()->get('/photos.json', 'apiPhotos', EpiApi::external);

getApi()->get('/photo.json/?(\d+)/', 'apiPhoto', EpiApi::external);
getApi()->get('/photo.json/?(\d+)/?(\d+)', 'apiPhoto', EpiApi::external);


getApi()->get('/enterqnas.json', 'apiEnterqnas', EpiApi::external);

getRoute()->get('/page/?(\d+)', 'apiPage', EpiApi::external);

/*getRoute()->get('/version', 'showVersion');
getRoute()->get('/users', 'showUsers');
getRoute()->get('/users/javascript', 'showUsersJavaScript');
getRoute()->get('/params', 'showParams');
getApi()->get('/version.json', 'apiVersion', EpiApi::external);
getApi()->get('/users.json', 'apiUsers', EpiApi::external);
getApi()->get('/params.json', 'apiParams', EpiApi::external);
getApi()->get('/params-internal.json', 'apiParams', EpiApi::internal);
getApi()->get('/params-internal-from-external.json', 'apiParamsFromExternal', EpiApi::external);
*/
getRoute()->run();

/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */

function showEndpoints(){
	echo "";

  echo <<<MIRIMMIRIM
<h1>무한효도 API 리스트</h1>
<ul>
  <li><a href="/api">/</a> -> (home. 바로 여기.)</li>
	<li><a href="/api/address">/api/address</a> -> 주소록 정보</li>
  <li><a href="/api/apitest">/</a> -> apiTest</li>
  <li><a href="/api/notice">/notice</a> -> 공지글</li>
  <li><a href="/api/gatong">/gatong</a> -> 가정통신문</li>
  <li><a href="/api/photo">/photo</a> -> 사진</li>
  <li><a href="/api/version">/version</a> -> (print the version of the api)</li>
  <li><a href="/api/users">/users</a> -> (print each user)</li>
  <li><a href="/api/users/javascript">/users/javascript</a> -> (make an ajax call to the users.json api)</li>
  <li><a href="/api/params">/params</a> -> (simulate get/post params to the api call)</li>
  <li><a href="/api/version.json">/version.json</a> -> (api endpoint for version.json)</li>
  <li><a href="/api/users.json">/users.json</a> -> (api endpoint for users.json)</li>
  <li><a href="/api/params-internal-from-external.json">/params-internal-from-external.json</a> -> (private api should be accessible from external)</li>
  <li><a href="/api/params-internal.json">/params-internal.json</a> -> (private api should not be accessible)</li>
</ul>
MIRIMMIRIM;

}




function apiTest(  ){
	$re = false;
	$ag = false;

	$info['program'] = urldecode($_POST['program']);
	$info['name'] = urldecode($_POST['name']);
	$info['sex'] = urldecode($_POST['sex']);
	$info['school'] = urldecode($_POST['school']);
	$info['year'] = urldecode($_POST['year']);
	$info['class'] = urldecode($_POST['class']);
	$info['home'] = urldecode($_POST['home']);
	$info['tel1'] = urldecode($_POST['tel1']);
	$info['tel2'] = urldecode($_POST['tel2']);
	$info['tel3'] = urldecode($_POST['tel3']);
	$info['email'] = urldecode($_POST['email']);
	$info['size'] = urldecode($_POST['size']);
	$info['agree1'] = urldecode($_POST['agree1']);
	$info['agree2'] = urldecode($_POST['agree2']);
	$info['iid'] = urldecode($_POST['id']);
	$info['pwd'] = urldecode($_POST['pwd']);

	$tmp_file = explode(' ',microtime());			//공백을 구분하여 마이크로초와 초를 구분
	$tmp_file[0] = substr($tmp_file[0],2,6);			//마이크로초의 소수점 뒷부분부터 6자리만 이용


	$uploaddir = '/home/emirim/www/api/fes2015/';
//	$uploadfile = $uploaddir . basename($_FILES['re']['name']);
	$path = pathinfo($_FILES['re']['name']);			//파일에 대한 정보를 얻음
	$ext = strtolower($path['extension']);
	$uploadfile1 = $uploaddir . $info['id'] . 're'.$tmp_file[1].$tmp_file[0].'.'.$ext;

//	$uploadfile = $uploaddir . basename($_FILES['ag']['name']);
//$uploadfile = $uploaddir . $info['id'] . 'ag';
	$path = pathinfo($_FILES['ag']['name']);			//파일에 대한 정보를 얻음
	$ext = strtolower($path['extension']);
	$uploadfile2 = $uploaddir . $info['id'] . 'ag'. $tmp_file[1].$tmp_file[0].'.'.$ext;

	$re['original'] = $_FILES['re']['name'];
	$ag['original'] = $_FILES['ag']['name'];

	$sql = "insert into fes2015  ( id,  program, name, sex, school, year, class, home, tel1, tel2, tel3, email, size, agree1, agree2, `rename`, agname, file1, file2, iid, pwd )  ";
	$sql .= "values(  null, '" .
		$info['program'] . "', '" .
		$info['name'] . "', '" .
		$info['sex'] . "', '" .
		$info['school'] . "', '" .
		$info['year'] . "', '" .
		$info['class'] . "', '" .
		$info['home'] . "', '". 
		$info['tel1'] . "', '" .
		$info['tel2'] . "', '" .
		$info['tel3'] . "', '" .
		$info['email'] . "', '" .
		$info['size'] . "', '" .
		$info['agree1'] . "', '" .
		$info['agree2'] . "', '" .
		$_FILES['re']['name'] . "', '" .
		$_FILES['ag']['name'] . "', '" .
		$info['id'] . 're'.$tmp_file[1].$tmp_file[0].'.'.$ext . "', '" .
		$info['id'] . 'ag'. $tmp_file[1].$tmp_file[0].'.'.$ext. "', '" .
		$info['iid'] . "', password('" .
		$info['pwd'] . "')  )";

	//return $sql;
	getDatabase()->execute('SET NAMES utf8');
	getDatabase()->execute($sql);
	$sql = "select * from fes2015 where iid = '". $info['iid']. "' and pwd = password('" .	$info['pwd'] . "') order by id desc";
	$rs = getDatabase()->all($sql);
	$info['id'] = $rs[0]['id'];
	
	if (move_uploaded_file($_FILES['re']['tmp_name'], $uploadfile1)) {
		$re['uploaded'] = true;
	} else {
		$re['uploaded'] = false;
	}


	if (move_uploaded_file($_FILES['ag']['tmp_name'], $uploadfile2)) {
		$ag['uploaded'] = true;
	} else {
		$ag['uploaded'] = false;
	}



	$items =  array(
		'info' => $info,
		're' =>  $re,
		'ag' => $ag,
		'rs' => $rs
	);

	return $items;
}

function apiSchool(){
	$items = array(
		'mirim_name' => '미림여자정보과학고등학교',
		'mirim_meister' => 'NEWMEDIA CONTENTS MIRIM MEISTER SCHOOL',
		'mirim_meister_short' => 'MIRIM MEISTER SCHOOL',
		'urlbase' => '//www.e-mirim.hs.kr/renewal/',
		'address' => "서울시 관악구 호암로 546 (신림동) 우)08821",
		'tel_kyomu' => "02-872-4072",
		'fax_office' => "02-878-2188",
		'tel_job' => "02-888-8350",
		'fax_job' => "02-875-2092",
		'address_eng'=>"546 Hoam-ro, Gwanak-gu, Seoul, 08821 Korea",
		'tel_eng'=>'+82-2-872-4072',
		'fax_eng'=>'+82-2-878-2188',
		'copyright' => "COPYRIGHT⒞ 2009~ MIRIM GIRLS' INFORMATION SCIENCE HIGH SCHOOL ALL RIGHT RESERVED.",

		'login' => "로그인",
		'login_url' => '/renewal/member/login.jsp',

		'join' => "회원가입",
		'join_url' => '/renewal/member/join_step1.jsp',

		'logout' => "로그아웃",
		'logout_url' => '/renewal/member/logout.jsp',

		'modify' => "정보수정",
		'modify_url' => '/renewal/member/modify.jsp',

		'contact' => "찾아오시는 길",
		'contact_url' => '/renewal/info/location.jsp',

		'openinfo' => "학교정보공개",
		'openinfo_url' => 'http://www.e-mirim.hs.kr/renewal/play/openinfo.jsp',

		'privacy' => "개인정보보호방침",
		'privacy_url' => '//www.e-mirim.hs.kr/renewal/member/privacy.jsp',

	);
	return $items;
}

function apiPage($menuno=-1){
	if(is_numeric($menuno) && $menuno > -1 && $menuno < 900){
		getDatabase()->execute('SET NAMES utf8');
		$rs = getDatabase()->all('SELECT * FROM mirim_page where menu_id = ' . $menuno . ' limit 1');
		$items = array();
		foreach( $rs as $key => $r ){
			array_push( $items,
					array(
							'category' => $r['category'],
							'title' => $r['title'],
							'title_en' => strip_tags($r['title_en']),
							'title_desc' => $r['title_desc'],
					)
			);
		}
		return $items;
	}
}

function apiMenu($menuno=-1){

	$items = array(
		array( 
			'title'=>'학교소개', 'href'=>'/renewal/info/insa.jsp', 'desc'=>'',
			'menu' => array(
				array( 'title'=>'인사말', 'href'=>'/renewal/info/insa.jsp', 'desc'=>'', ),
				array( 'title'=>'교육이념', 'href'=>'/renewal/info/ideology.jsp', 'desc'=>'', ),
				array( 'title'=>'교육목표', 'href'=>'/renewal/info/goal.jsp', 'desc'=>'', ),
				array( 'title'=>'미림발자취', 'href'=>'/renewal/info/footmark.jsp', 'desc'=>'', ),
				array( 'title'=>'미림상징', 'href'=>'/renewal/info/symbol.jsp', 'desc'=>'', ),
				array( 'title'=>'교정안내', 'href'=>'/renewal/info/campus.jsp', 'desc'=>'', ),
				array( 'title'=>'약도 및 연락처', 'href'=>'/renewal/info/location.jsp', 'desc'=>'', ),
				array( 'title'=>'선생님 소개', 'href'=>'/renewal/info/teacher.jsp', 'desc'=>'', ),
				array( 'title'=>'미림플래콘', 'href'=>'/renewal/info/flacon.jsp', 'desc'=>'', ),
				array( 'title'=>'언론보도', 'href'=>'/renewal/info/news_l.jsp', 'desc'=>'', ),
			)
		),
		array( 'title'=>'입학안내',
			'menu' => array(
				array( 'title'=>'전형요강', 'href'=>'/renewal/admission/admission_guide.jsp', 'desc'=>'뉴미디어 콘텐츠분야의 영마이스터를 모집합니다.', ),
				array( 'title'=>'입학상담 FAQ', 'href'=>'/renewal/admission/faq.jsp', 'desc'=>'마이스터고 미림 입학과 관련하여 자주 물어보는 사항들에 대해서 아실 수 있습니다.', ),
				array( 'title'=>'입학상담 Q&A', 'href'=>'/renewal/admission/qna_l.jsp', 'desc'=>'마이스터고 미림 입학과 관련하여 궁금한 사항을 질문하시면 성실히 답변드리겠습니다.', ),
				array( 'title'=>'원서접수', 'href'=>'/renewal/admission/admission_paper.jsp', 'desc'=>'마이스터고 미림의 원서지원 방법을 자세히 소개합니다.', ),
				array( 'title'=>'입학설명회', 'href'=>'/renewal/admission/admission_l.jsp', 'desc'=>'미래의 꿈을 이룰 곳, 마이스터고 미림의 입학설명회에서 직접 만나보십시오.', ),
				array( 'title'=>'진로체험교실', 'href'=>'/renewal/admission/exp_l.jsp', 'desc'=>'스마트 앱 창작캠프, 창업캠프에 대한 설명 및 신청을 할 수 있습니다.', ),					
				array( 'title'=>'뉴미디어페스티벌', 'href'=>'/renewal/admission/camp.jsp', 'desc'=>'스마트 앱 창작캠프, 창업캠프에 대한 설명 및 신청을 할 수 있습니다.', ),
				//array( 'title'=>'예비고1 Pre-Highschool', 'href'=>'/renewal/admission/prehigh_l.jsp', 'desc'=>'예비고1 입학전 교육프로그램을 안내해드립니다.', ),
			)
		),
		array( 'title'=>'학과안내',
			'menu' => array(
				array( 'title'=>'인터랙티브미디어과', 'href'=>'/renewal/depart/interactive.jsp', 'desc'=>'', ),
				array( 'title'=>'뉴미디어디자인과', 'href'=>'/renewal/depart/design.jsp', 'desc'=>'', ),
				array( 'title'=>'뉴미디어솔루션과', 'href'=>'/renewal/depart/solution.jsp', 'desc'=>'', ),
				array( 'title'=>'학생회소개', 'href'=>'/renewal/depart/students.jsp', 'desc'=>'', ),
				array( 'title'=>'수상소식', 'href'=>'/renewal/depart/prize.jsp', 'desc'=>'', ),
				array( 'title'=>'동아리활동', 'href'=>'/renewal/depart/group.jsp', 'desc'=>'', ),
				array( 'title'=>'단정한미림인', 'href'=>'/renewal/depart/mirimin.jsp', 'desc'=>'마이스터고 미림의 생활규정과 기숙사규정', ),
				array( 'title'=>'수업공개동영상', 'href'=>'/renewal/depart/class_movie_l.jsp', 'desc'=>'마이스터고 미림의 수업공개동영상', ),
			)
		),
		array( 
			'title'=>'교육활동', 'href'=>'/renewal/play/notice_l.jsp', 'desc'=>'',
			'menu' => array(
				array( 'title'=>'공지사항', 'href'=>'/renewal/play/notice_l.jsp', 'desc'=>'미림 마이스터고의 다양한 공지사항을 알 수 있습니다.', ),
				array( 'title'=>'교내행사', 'href'=>'/renewal/play/calendar.jsp', 'desc'=>'미림 마이스터고의 행사 일정을 알 수 있습니다.', ),
				array( 'title'=>'교육계획', 'href'=> '/renewal/play/eduplan_l.jsp', 'desc'=>'', ),
				array( 'title'=>'평가계획', 'href'=>'/renewal/play/evalplan_l.jsp', 'desc'=>'', ),
				array( 'title'=>'고사원안', 'href'=>'/renewal/play/testpapers_l.jsp', 'desc'=>'', ),
				array( 'title'=>'이미림뉴스', 'href'=>'/renewal/play/emirimnews.jsp', 'desc'=>'', ),
				array( 'title'=>'웹진', 'href'=>'/renewal/play/webzine_l.jsp', 'desc'=>'', ),
				array( 'title'=>'학교앨범', 'href'=>'/renewal/play/media_photo_l.jsp', 'desc'=>'', ),
//				array( 'title'=>'동영상', 'href'=>'/renewal/play/media_movie_l.jsp', 'desc'=>'', ),
				array( 'title'=>'학교정보공개', 'href'=>'http://www.e-mirim.hs.kr/renewal/play/openinfo.jsp', 'desc'=>'마이스터고 미림의 정보공개내역', ),
			)
		),
		array( 
			'title'=>'취업지도', 'href'=>'/renewal/job/employment.jsp', 'desc'=>'',
			'menu' => array(
				array( 'title'=>'취업현황', 'href'=>'/renewal/job/employment.jsp', 'desc'=>'마이스터고 미림의 다양한 진로지도를 통한 취업현황 정보를 알려드립니다.', ),
				array( 'title'=>'협력업체정보', 'href'=>'/renewal/job/company_l.jsp', 'desc'=>'마이스터고 미림과 함께 IT시대의 주역을 만들어가는 협력업체를 소개합니다.', ),
				array( 'title'=>'취업의뢰', 'href'=>'/renewal/job/jobask_main.jsp', 'desc'=>'취업 의뢰를 위한 양식파일 및 연락처를 알려드립니다.', ),
				//array( 'title'=>'취업의뢰게시판', 'href'=>'/renewal/job/jobask_l.jsp', 'desc'=>'취업 의뢰를 신청하실 수 있습니다.', ),
				array( 'title'=>'취업체험사례', 'href'=>'/renewal/job/jobexp_l.jsp', 'desc'=>'졸업생들의 취업 체험 사례를 소개합니다.', ),
				array( 'title'=>'현장실습자료실', 'href'=>'/renewal/job/jobinfo.jsp', 'desc'=>'현장실습 보고서 및 양식이 있습니다.', ),
//				array( 'title'=>'멘토링', 'href'=>'/renewal/job/data_l.jsp', 'desc'=>'멘토링 수기를 소개합니다.', ),
				array( 'title'=>'ICPP소개', 'href'=>'/renewal/job/icpp.jsp', 'desc'=>'개인별 ICPP를 통한 지속적인 경력 및 관리지도, 산학협력을 통한 맞춤형 교육을 알려드립니다.', ),
			)
		),
		array( 
			'title'=>'커뮤니티', 'href'=>'/renewal/play/notice_l.jsp', 'desc'=>'',
			'menu' => array(
				array( 'title'=>'미림클럽', 'href'=>'/renewal/community/community.jsp', 'desc'=>'', ),
				array( 'title'=>'미림UCC', 'href'=>'http://www.youtube.com/channel/UCDIT0c0tNrf3Mif9z5ep6jg/playlists', 'desc'=>'', ),
				array( 'title'=>'재학생게시판', 'href'=>'/renewal/community/now_l.jsp', 'desc'=>'', ),
				array( 'title'=>'가정통신문', 'href'=>'/renewal/community/parent_l.jsp', 'desc'=>'가정통신문을 확인하실 수 있습니다.', ),
				array( 'title'=>'자유게시판', 'href'=>'/renewal/community/free_l.jsp', 'desc'=>'', ),
				array( 'title'=>'졸업생게시판', 'href'=>'/renewal/community/finish_l.jsp', 'desc'=>'', ),
				array( 'title'=>'상담실', 'href'=>'/renewal/community/ask_l.jsp', 'desc'=>'', ),
				array( 'title'=>'학교급식 안내', 'href'=>'/renewal/community/eat_l.jsp', 'desc'=>'급식 메뉴를 확인하실 수 있습니다.', ),
				array( 'title'=>'영양게시판', 'href'=>'/renewal/community/eat2_l.jsp', 'desc'=>'급식 영양 관련 내용을 확인하실 수 있습니다.', ),
				array( 'title'=>'학교운영위원회', 'href'=>'/renewal/community/office_l.jsp', 'desc'=>'', ),
			)
		),
		array( 
			'title'=>'학교평가', 'href'=>'/renewal/eval/result_l.jsp', 'desc'=>'학교평가',
			'menu' => array(
				array( 'title'=>'2014년도 결과', 'href'=>'/renewal/eval/result_l.jsp', 'desc'=>'학교평가 결과', ),
				array( 'title'=>'2015년도 계획', 'href'=>'/renewal/eval/plan_l.jsp', 'desc'=>'학교평가 계획', ),
			)
		),
		array( 
			'title'=>'회원정보', 'href'=>'/renewal/member/login.jsp', 'desc'=>'회원정보',
			'menu' => array(
				array( 'title'=>'로그인', 'href'=>'/renewal/member/login.jsp', 'desc'=>'로그인', ),
				array( 'title'=>'ID/PW찾기', 'href'=>'/renewal/member/find.jsp', 'desc'=>'ID/PW찾기', ),
				array( 'title'=>'회원가입', 'href'=>'/renewal/member/join_step1.jsp', 'desc'=>'회원가입', ),
				array( 'title'=>'회원정보수정', 'href'=>'/renewal/member/modify.jsp', 'desc'=>'회원정보수정', ),
				array( 'title'=>'개인정보보호방침', 'href'=>'/renewal/member/privacy.jsp', 'desc'=>'개인정보보호방침', ),
				//array( 'title'=>'나의맞춤메뉴', 'href'=>'/renewal/member/mymenu.jsp', 'desc'=>'나의맞춤메뉴', )
			)
		)
	);
	
	if($menuno != -1){
		return $items[$menuno];
	}else{		
		return $items;
	}
}

function apiPopup($no = 10){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_school where board_flag = "pop_pop" and etc2 = "Y" order by sno desc limit ' . $no);
	$items = array();
	foreach( $rs as $key => $r ){
		array_push( $items, 
			array( 
				'title' => $r['title'],
				'href' => $r['content'],
				'image' => '/upload/new_board/' . $r['filenm'],
			)
		);
	}
	return $items;
}

function apiQuickMenu(){
	$items = array();
	// 교내행사
	array_push($items, 
		array(
			'title' => '교내행사',
			'description' => '교내행사를 확인하실 수 있습니다.',
			'icon' => 'imgx/icons/hongbo.png',
			'href' => '/renewal/play/edu_01_l.jsp', 
		)
	);
	// 입학설명회
	array_push($items, 
		array(
			'title' => '입학설명회',
			'description' => '미래의 꿈을 이룰 곳, 마이스터고 미림의 입학설명회에서 직접 만나보십시오.',
			'icon' => 'imgx/icons/iphak.png',
			'href' => '/renewal/admission/admission_l.jsp', 
		)
	);
	// 가정통신문
	array_push($items, 
		array(
			'title' => '가정통신문',
			'description' => '가정통신문을 확인하실 수 있습니다.',
			'icon' => 'imgx/icons/gajung.png',
			'href' => '/renewal/community/parent_l.jsp', 
		)
	);
	// 학교앨범
	array_push($items, 
		array(
			'title' => '학교앨범',
			'description' => '학교앨범을 확인하실 수 있습니다.',
			'icon' => 'imgx/icons/photos.png',
			'href' => '/renewal/play/media_photo_l.jsp', 
		)
	);
	// 급식안내
	array_push($items, 
		array(
			'title' => '급식안내',
			'description' => '급식 메뉴를 확인하실 수 있습니다.',
			'icon' => 'imgx/icons/gupsik.png',
			'href' => '/renewal/community/eat_l.jsp', 
		)
	);
	return $items;
}


function apiBoard($no = 10, $page = 1, $search='', $keyword='', $tbl, $board_flag, $url){
	$keyword = htmlspecialchars(urldecode($keyword));
	if($page < 1){
		$page = 1;
	}

	$sql_count = 'SELECT count(*) as cnt FROM '.$tbl.' where board_flag = "'.$board_flag.'"';
	$sql_list = 'SELECT * FROM '.$tbl.' where board_flag = "'.$board_flag.'" order by top_check desc, sno desc limit ' . ( $page - 1 ). ', ' . $no;

	if($search == 'content' ){
		$sql_count = 'SELECT count(*) as cnt FROM '.$tbl.' where board_flag = "'.$board_flag.'" and ( title like "%'.$keyword.'%" or content like "%'.$keyword.'%"  ) ';
		$sql_list = 'SELECT * FROM '.$tbl.' where board_flag = "'.$board_flag .'" and ( title like "%'.$keyword.'%" or content like "%'.$keyword.'%" )  order by top_check desc, sno desc limit ' . ( $page - 1 ). ', ' . $no;
	}else if($search == 'writer' ){
		$sql_count = 'SELECT count(*) as cnt FROM '.$tbl.' where board_flag = "'.$board_flag.'" and w_name like "%'.$keyword.'%"';
		$sql_list = 'SELECT * FROM '.$tbl.' where board_flag = "'.$board_flag .'" and w_name like "%'.$keyword.'%" order by top_check desc, sno desc limit ' . ( $page - 1 ). ', ' . $no;
	}

	getDatabase()->execute('SET NAMES utf8');
	$count = getDatabase()->one($sql_count);
	$rs = getDatabase()->all($sql_list);

	$items = array();
	foreach( $rs as $key => $r ){
		array_push( $items,
				array(
						'sno' => $r['sno'],
						'title' => $r['title'],
						'writeday' => $r['writeday'],
						'content' => strip_tags($r['content']),
						'readnum' => $r['readnum'],
						'writer' => $r['w_name'],
						'url' => '//'. $url . '?sno=' . $r['sno'] . '&pageno=' . (int)($page / $no + 1), 
						'filenm' => $r['filenm'],
						'comment_count' => $r['word_count'],
						'top_check'=>$r['top_check']
				)
		);
	}

	$r = array(
			'totalSize' => (int) $count['cnt'],
			'articles' => $items,
			'tpye' => $search,
			'keyword' => $keyword
	);
	return $r;
}

function apiNews($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_school';
	$board_flag = 'meister_notice';
	$url = 'www.e-mirim.hs.kr/renewal/info/news_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiAdmissionQNA($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_enter_qna';
	$board_flag = 'enter_qna';
	$url = 'www.e-mirim.hs.kr/renewal/admission/qna_v.jsp';

	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiAdmissionAdmission($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_enter_qna';
	$board_flag = 'edu_admission';
	$url = 'www.e-mirim.hs.kr/renewal/admission/admission_v.jsp';

	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiAdmissionExp($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_enter_qna';
	$board_flag = 'edu_exp';
	$url = 'www.e-mirim.hs.kr/renewal/admission/exp_v.jsp';

	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}


// 진로지도
function apiJobCompanies($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_job';
	$board_flag = 'job_company';
	$url = 'www.e-mirim.hs.kr/renewal/job/company_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiJobAsks($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_job';
	$board_flag = 'job_ask';
	$url = 'www.e-mirim.hs.kr/renewal/job/jobask_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}


function apiJobExps($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_job';
	$board_flag = 'job_exp';
	$url = 'www.e-mirim.hs.kr/renewal/job/jobexp_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

// 커뮤니티 

function apiStudentboard($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_grade';
	$board_flag = 'grade_now';
	$url = 'www.e-mirim.hs.kr/renewal/community/now_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiParents($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_grade';
	$board_flag = 'grade_parent';
	$url = 'www.e-mirim.hs.kr/renewal/community/parent_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiFreeBoard($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'free_free';
	$url = 'www.e-mirim.hs.kr/renewal/community/free_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiGraduates($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_grade';
	$board_flag = 'grade_gradu';
	$url = 'www.e-mirim.hs.kr/renewal/community/finish_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}



function apiAdvices($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_ask';
	$board_flag = 'ask_consult';
	$url = 'www.e-mirim.hs.kr/renewal/community/ask_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}


function apiSchoolmeals($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'free_eat';
	$url = 'www.e-mirim.hs.kr/renewal/community/eat_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiNutritions($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'free_eat2';
	$url = 'www.e-mirim.hs.kr/renewal/community/eat2_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiOffices($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'office_office';
	$url = 'www.e-mirim.hs.kr/renewal/community/office_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}


// 학교평가
function apiSchoolEvalResults($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'eval_result';
	$url = 'www.e-mirim.hs.kr/renewal/eval/result_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiSchoolEvalPlans($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_free';
	$board_flag = 'eval_plan';
	$url = 'www.e-mirim.hs.kr/renewal/eval/plan_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

// 교육활동 
//공지사항 
function apiNotices($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_school';
	$board_flag = 'school_notice';
	$url = 'www.e-mirim.hs.kr/renewal/play/notice_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiEduplans($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_school';
	$board_flag = 'edu_eduplan';
	$url = 'www.e-mirim.hs.kr/renewal/play/eduplan_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiEvalplans($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_school';
	$board_flag = 'edu_evalplan';
	$url = 'www.e-mirim.hs.kr/renewal/play/evalplan_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

function apiTestpapers($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_school';
	$board_flag = 'edu_testpaper';
	$url = 'www.e-mirim.hs.kr/renewal/play/testpapers_v.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}

//이미림뉴스 
function apiEmirimnews($no = 10, $page = 1, $search='', $keyword=''){
	$tbl = 'board_emirimnews';
	$board_flag = 'emirim_news';
	$url = 'www.e-mirim.hs.kr/renewal/play/emirimnews.jsp';
	return apiBoard($no, $page, $search, $keyword, $tbl, $board_flag, $url);
}


function apiNotice($sno){
	getDatabase()->execute('SET NAMES utf8');
	$r = getDatabase()->one(
		'SELECT * FROM board_school where sno = :sno and board_flag = :board_flag', 
		array(':sno' => $sno, ':board_flag' => 'school_notice') 
	);
	$item = array( 
				'sno' => $r['sno'], 
				'title' => $r['title'],
				'writeday' => $r['writeday'],
				'content' => strip_tags($r['content']),
				'content_html' => $r['content'],
				'readnum' => $r['readnum'],
				'files' => array(),
				'prev' => array(),
				'next' => array(),
			);
	if($r['re_filenm']){
		array_push(
			$item['files'],
			array('title' => $r['re_filenm'], 'file' => $r['filenm'] )
		);
	}
	if($r['re_filenm2']){
		array_push(
			$item['files'],
			array('title' => $r['re_filenm2'], 'file' => $r['filenm2'] )
		);
	}

	$r = getDatabase()->one(
		'SELECT sno, title, content FROM board_school where sno > :sno and board_flag = :board_flag order by sno ASC', 
		array(':sno' => $sno, ':board_flag' => 'school_notice') 
	);

	$item['next'] = ($r == null) ? null : array('sno' => $r['sno'], 'title' => $r['title'], 'content' => strip_tags($r['content'])
	);
	$r = getDatabase()->one(
		'SELECT sno, title, content FROM board_school where sno < :sno and board_flag = :board_flag order by sno DESC', 
		array(':sno' => $sno, ':board_flag' => 'school_notice') 
	);
	
	$item['prev'] = ($r == null) ? null : array(
		'sno' => $r['sno'], 'title' => $r['title'], 'content' => strip_tags($r['content'])
	);
	return $item;
}



function apiEnterqnas(){
	//board_enter_qna
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_enter_qna where board_flag = "enter_qna" order by sno desc limit 10');
	$ret = array();
	foreach( $rs as $key => $r ){
		array_push( $ret, array( 'sno' => $r['sno'], 'title' => $r['title'], 'content' => $r['content'] ) );
	}
	
	return $ret;
}


function showNotice(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_free where board_flag = "free_eat" order by sno desc limit 10');
	echo "<h2>레코드</h2><ol>";
	foreach( $rs as $key => $r ){
		print_r($r);
		//echo "<li>Record {$key} - {$r['title']}</li>";
	}
	echo "</ol>";
	echo <<<MIRIMMIRIM
<h1>공지공지</h1>
MIRIMMIRIM;
}

function showGatong(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_grade order by sno desc ');
	echo "<h2>레코드</h2><ul>";
	foreach( $rs as $key => $r ){
		echo "<li>Record {$key} - {$r['title']} </li>";
	}
	echo "</ul>";
}


function showPhoto2(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_photo_school order by sno desc limit 10');
	echo "<h2>레코드</h2><ul>";
	echo<<<CSSSS
<style> img { width:125px; height:75px; } </style>
CSSSS;
	foreach( $rs as $key => $r ){
		echo<<<CSSSS
<li>Record {$r['sno']} - {$r['title']}<br />
CSSSS;
		for($i = 0; $i < 6; $i ++){
			if($r['filenm' . ( ($i == 0 ) ? '' : ($i) ) ]){
				echo<<<CSSSS
<img src="http://e-mirim.hs.kr/upload/board_photo/{$r['filenm'  . ( ($i == 0 ) ? '' : ($i) )  ]}" />
CSSSS;
			}
		}
		echo "</li>";
	}
	echo "</ul>";
}

function showPhoto3(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_photo_school order by sno desc limit 10');
	echo<<<CSSSS
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link href="http://www.meadmiracle.com/Styles/default.css" type="text/css" rel="stylesheet" />
		<script language="javascript" type="text/javascript" src="http://www.meadmiracle.com/scripts/jquery-1.3.2.min.js"></script>
		<script language="javascript" type="text/javascript" src="http://www.meadmiracle.com/scripts/jquery.slidingGallery-1.2.min.js"></script>
		<script language="javascript" type="text/javascript">
			$(function() {
				//alert("Asdf");
				$('div.gallery img').slidingGallery();
			});
		</script>
		<style type="text/css">
			div.gallery img 
			{
				border: solid 1px white;
			}
		</style>
	</head>
	<body>
		<div class="gallery">
CSSSS;
	foreach( $rs as $key => $r ){
		echo<<<CSSSS
CSSSS;
		for($i = 0; $i < 6; $i ++){
			if($r['filenm' . ( ($i == 0 ) ? '' : ($i) ) ]){
				echo<<<CSSSS
			<img src="http://e-mirim.hs.kr/upload/board_photo/{$r['filenm'  . ( ($i == 0 ) ? '' : ($i) )  ]}" alt="Asd"
CSSSS;
			echo  ($i == 0) ?  'class="start" >' : ' >' ;
			}
		}

	}
	echo "</div></body></html>";
}


function showPhoto4(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_photo_school order by sno desc limit 10');
	echo<<<CSSSS
<!DOCTYPE html>
<html >
	<head>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="http://unslider.com/unslider.min.js"></script>
		<style>
		.banner { position: relative; overflow: auto; }
			.banner li { list-style: none; }
				.banner ul li { float: left; }
		</style>
			<script>
			$(function() {
					$('.banner').unslider();
				});
			</script>
	</head>
	<body>
		<div class="banner"><ul>
CSSSS;
	foreach( $rs as $key => $r ){
		echo<<<CSSSS
CSSSS;
		for($i = 0; $i < 6; $i ++){
			if($r['filenm' . ( ($i == 0 ) ? '' : ($i) ) ]){
				echo<<<CSSSS
			<li><img src="http://e-mirim.hs.kr/upload/board_photo/{$r['filenm'  . ( ($i == 0 ) ? '' : ($i) )  ]}" alt="Asd" ></li>
CSSSS;
			}
		}

	}
	echo "</ul></div></body></html>";
}


function apiPhoto( $sno, $no = 0 ){
	$arr = array();
	getDatabase()->execute('SET NAMES utf8');
	$r = getDatabase()->one('SELECT * FROM board_photo_school where sno = :sno', array(':sno' => $sno ) );
	if ( $r['filenm'  . ( ($no == 0 ) ? '' : ($no) )  ] != null ) {
		$arr = array( 'sno' => $r['sno'], 'no' => $no ,'filename' => 'http://e-mirim.hs.kr/upload/board_photo/' . $r['filenm'  . ( ($no == 0 ) ? '' : ($no) )  ]);
	}
	return   $arr;
}

function apiPhotos(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_photo_school order by sno desc');
	$photos = array();
	foreach( $rs as $key => $r ){
		for($i = 0; $i <= 6; $i ++){
			if($r['filenm' . ( ($i == 0 ) ? '' : ($i) ) ]){
				array_push( $photos, array( 'sno' => $r['sno'], 'no' => $i ,'filename' => 'http://e-mirim.hs.kr/upload/board_photo/' . $r['filenm'  . ( ($i == 0 ) ? '' : ($i) )  ]) );
			}
		}
	}
	return $photos;
}

function showPhotoRandom(){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all('SELECT * FROM board_photo_school order by rand() limit 1');
	$photos = array();
	foreach( $rs as $key => $r ){
		for($i = 0; $i <= 6; $i ++){
			if($r['filenm' . ( ($i == 0 ) ? '' : ($i) ) ]){
				array_push( $photos, array( 'title' => $r['title'], 'sno' => $r['sno'], 'no' => $i ,'img' => 'http://e-mirim.hs.kr/upload/board_photo/' . $r['filenm'  . ( ($i == 0 ) ? '' : ($i) )  ]) );
			}
		}
	}
	return $photos[0];
}
?>
