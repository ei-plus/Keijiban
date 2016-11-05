
<?php 
header("Content-Type: text/html; charset=UTF-8");

$json = '{
        "attitude": 0, 
        "category": "専門科目IIA（基盤科目）", 
        "class_code": "1930005010", 
        "class_id": 272, 
        "class_name": "人間計測・人間情報モデリング", 
        "class_no": "01", 
        "classes_detail": [
            {
                "class_id": 272, 
                "class_period": "2", 
                "class_week": "火", 
                "id": 272, 
                "room_name": "１００-２０４", 
                "term": "春学期"
            }
        ], 
        "credit": 2, 
        "exam": 50, 
        "faculty": "人間科学部", 
        "other": 0, 
        "report": 50, 
        "second_regi": "n", 
        "summary": "感覚・知覚・情動・知能の機能や情報の特性を明らかにするために、人間工学・情報科学的な研究手法が有効である。本科目では、人間工学的なデータ計測方法、生体機能の測定方法、視覚特性や聴覚特性の測定方法、言語・知識のモデル化手法について、講義を通じて学ぶ。", 
        "tags": [], 
        "teachers": [
            {
                "pivot": {
                    "class_id": 272, 
                    "teacher_id": 181
                }, 
                "teacher_id": 181, 
                "teacher_name": "百瀬　桂子"
            }, 
            {
                "pivot": {
                    "class_id": 272, 
                    "teacher_id": 172
                }, 
                "teacher_id": 172, 
                "teacher_name": "藤本　浩志"
            }, 
            {
                "pivot": {
                    "class_id": 272, 
                    "teacher_id": 45
                }, 
                "teacher_id": 45, 
                "teacher_name": "菊池　英明"
            }, 
            {
                "pivot": {
                    "class_id": 272, 
                    "teacher_id": 101
                }, 
                "teacher_id": 101, 
                "teacher_name": "松居　辰則"
            }
        ], 
        "textbook": "　なし", 
        "zemi": "n"
    }';

$obj = json_decode($json);

var_dump($obj);
//問1:授業名をechoで表示
echo $obj->class_name;

//問2:授業の学期をechoで表示
echo $obj->classes_detail[0]->term ;
//問3:担当教師(全員)をechoで表示
//ヒント:foreach使う！
foreach ($obj->teachers as $value ){
  echo $value->teacher_name;
}