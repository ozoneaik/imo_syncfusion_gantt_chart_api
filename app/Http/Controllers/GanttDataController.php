<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;

class GanttDataController extends Controller
{
    //
    public function GanttData(){
        $data = [
            [
                'TaskID' => 1,
                'TaskName' => 'เริ่มต้นโครงการ',
                'StartDate' => '2019-04-02',
                'EndDate' => '2019-04-21',
                'subtasks' => [
                    ['TaskID' => 2, 'TaskName' => 'ระบุตำแหน่งที่ตั้ง', 'StartDate' => '2019-04-02', 'Duration' => 4, 'Progress' => 70],
                    ['TaskID' => 3, 'TaskName' => 'ทดสอบ', 'StartDate' => '2019-04-02', 'Duration' => 4, 'Progress' => 50],
                    ['TaskID' => 4, 'TaskName' => 'อนุมัติผลทดสอบดิน', 'StartDate' => '2019-04-02', 'Duration' => 4, 'Progress' => 50],
                ]
            ],
            [
                'TaskID' => 5,
                'TaskName' => 'ประมาณการโครงการ',
                'StartDate' => '2019-04-02',
                'EndDate' => '2019-04-21',
                'subtasks' => [
                    ['TaskID' => 6, 'TaskName' => 'สร้างแบบแปลนชั้นสำหรับประมาณการ', 'StartDate' => '2019-04-04', 'Duration' => 3, 'Progress' => 50],
                    ['TaskID' => 7, 'TaskName' => 'รายการวัสดุ', 'StartDate' => '2019-04-04', 'Duration' => 3, 'Progress' => 50],
                    ['TaskID' => 8, 'TaskName' => 'อนุมัติประมาณการ', 'StartDate' => '2019-04-04', 'Duration' => 3, 'Progress' => 50]
                ]
            ],
            // Task ตัวที่ 3
            [
                'TaskID' => 9,
                'TaskName' => 'การเตรียมความพร้อมและจัดการทรัพยากร',
                'StartDate' => '2019-04-10',
                'EndDate' => '2019-04-25',
                'subtasks' => [
                    ['TaskID' => 10, 'TaskName' => 'วางแผนการเตรียมความพร้อม', 'StartDate' => '2019-04-10', 'Duration' => 5, 'Progress' => 60],
                    ['TaskID' => 11, 'TaskName' => 'จัดการทรัพยากรมนุษย์', 'StartDate' => '2019-04-15', 'Duration' => 4, 'Progress' => 40],
                    ['TaskID' => 12, 'TaskName' => 'จัดหาอุปกรณ์และวัสดุ', 'StartDate' => '2019-04-20', 'Duration' => 3, 'Progress' => 70],
                    ['TaskID' => 13, 'TaskName' => 'การจัดระบบ IT', 'StartDate' => '2019-04-23', 'Duration' => 6, 'Progress' => 80],
                ]
            ],
            // Task ตัวที่ 4
            [
                'TaskID' => 14,
                'TaskName' => 'การดำเนินการและการสื่อสาร',
                'StartDate' => '2019-04-15',
                'EndDate' => '2019-04-30',
                'subtasks' => [
                    ['TaskID' => 15, 'TaskName' => 'การดำเนินงานตามแผน', 'StartDate' => '2019-04-15', 'Duration' => 7, 'Progress' => 50],
                    ['TaskID' => 16, 'TaskName' => 'การติดตามและรายงานความก้าวหน้า', 'StartDate' => '2019-04-18', 'Duration' => 4, 'Progress' => 30],
                    ['TaskID' => 17, 'TaskName' => 'การประสานงานระหว่างทีม', 'StartDate' => '2019-04-22', 'Duration' => 5, 'Progress' => 60],
                    ['TaskID' => 18, 'TaskName' => 'การสื่อสารกับผู้เกี่ยวข้อง', 'StartDate' => '2019-04-25', 'Duration' => 3, 'Progress' => 40],
                ]
            ]
        ];




        return $data;
    }



}
