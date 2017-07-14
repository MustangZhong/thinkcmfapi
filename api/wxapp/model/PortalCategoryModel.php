<?php
// +----------------------------------------------------------------------
// | 文件说明：文章分类
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: wuwu <15093565100@163.com>
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Date: 2017-7-14
// +----------------------------------------------------------------------

namespace api\wxapp\model;

use think\Model;

class PortalCategoryModel extends Model
{
    
	/**
	 * [base 全局查询范围status=1显示状态]
	 * @Author:   wuwu<15093565100@163.com>
	 * @DateTime: 2017-07-14T21:54:03+0800
	 * @since:    1.0
	 */
	protected function base($query)
	{
		$query -> where('status',1);
	}

}

