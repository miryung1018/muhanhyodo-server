<?php
header("Access-Control-Allow-Origin: *");
chdir('..');
include_once '../epi/Epi.php';
Epi::setPath('base', '../epi');
Epi::init('api');
Epi::init('route', 'database');
//EpiDatabase::employ('mysql','_dbname_','localhost','_id_','_pw_'); 
include "db.php";
// type = mysql, database = mysql, host = localhost, user = root, password = [empty]
// Epi::init('base','cache','session');


////////////////////////////////////////////////////////////////////////////////////
// 주소록
getRoute()->get('/address/?(\d+)?', 'apiAddress', EpiApi::external);
/*
/address
/address/
/address/2
/address/234234324234
*/
// 약
getRoute()->get('/medicine/?(\d+)?', 'apiMedicine', EpiApi::external);

// 회원가입(조부모)
getRoute()->get('/user/?(\d+)?', 'apiUser', EpiApi::external);

// 회원가입(보호자)
getRoute()->get('/family/?(\d+)?', 'apiFamily', EpiApi::external);

// 공지사항
getRoute()->get('/memo/notice/?(\d+)?', 'apiNotice', EpiApi::external);

// 일반 글 목록
getRoute()->get('/memo/normal/?(\d+)?', 'apiNormal', EpiApi::external);


// 그냥 접속했을 경우. 초기 페이지. (나중에 막아야 함)
getRoute()->get('/', 'showEndpoints');

////////////////////////////////////////////////////////////////////////////////////
getRoute()->run();

/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */
////////////////////////////////////////////////////////////////////////////////////
function showEndpoints(){
	echo "";

  echo <<<MIRIMMIRIM
<h1>무한효도 API 리스트</h1>
<ul>
  <li><a href="/api">/</a> -> (home. 바로 여기.)</li>
  <li><a href="/api/address">/api/address</a> -> 주소록 정보</li>
  <li><a href="/api/medicine">/api/medicine</a> -> 약 정보</li>
  <li><a href="/api/user">/api/user</a> -> 회원가입(조부모)</li>
  <li><a href="/api/family">/api/family</a> -> 회원가입(보호자)</li>
  <li><a href="/api/memo/notice">/api/memo/notice</a> -> 공지사항 </li>
  <li><a href="/api/memo/normal">/api/memo/normal</a> -> 일반 글 목록 </li>
</ul>
MIRIMMIRIM;

}


function apiAddress($no = 10){
	getDatabase()->execute('SET NAMES utf8');
	$rs = getDatabase()->all( 'SELECT * FROM address ');
	$items = array();
	for ($i = 0; $i < count($rs); $i++){
		$r = $rs[0];
		array_push( $items,
			array(
					'id' => $r['id'], 
					'name' => $r['name'],
					'tel' => $r['tel'],
					'address' => $r['address']
			)
		);
	}
	return $items;
}


/*
function apiAddress_old(){
	$items = array();
	array_push( $items,
			array(
				'id' => 1,
				'name' => '연미령',
				'tel' => '010-1234-5678',
				'address' => '서울시 관악구 호암로546(신림동)'
			)
	);
	array_push( $items,
			array(
				'id' => 2,
				'name' => '연미령',
				'tel' => '010-1234-5678',
				'address' => '서울시 관악구 호암로546(신림동)'
			)
	);
	array_push( $items,
			array(
				'id' => 3,
				'name' => '연미령',
				'tel' => '010-1234-5678',
				'address' => '서울시 관악구 호암로546(신림동)'
			)
	);
	return $items;
}
*/

function apiMedicine() {
	$items = array();

	array_push( $items,
		array(
			'id' => 14,
			'title' => "글 제목",
		    'morning' => 1,
			'afternoon' => 0,
			'evening' => 1,
			'sound' => '할머니 약 드세요!'
		)
	);
	return $items;
}


function apiUser() {
	$items = array();

	array_push( $items,
		array(
			'name' => "할머니 이름",
		    'tel' => '010-1234-5678'

		)
	);
	return $items;
}

function apiFamily() {
	$items = array();

	array_push( $items,
		array(
			'name' => "할머니 이름",
		    'tel' => '010-1234-5678'

		)
	);
	return $items;
}

function apinotice() {
	$items = array();

	array_push( $items,
		array(
			'id' => 23,
		    'title' => '글 제목'

		)
	);
	return $items;
}

function apinormal() {
	$items = array();

	array_push( $items,
		array(
			'id' => 23,
		    'title' => '글 제목',
			'chk' => 1

		)
	);
	return $items;
}

////////////////////////////////////////////////////////////////////////////////////
?>
