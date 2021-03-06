<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

/* 用户登录语言项 */
return array(
	'empty_username_password'	=> '对不起，您必须完整填写用户名和密码。',
	'shot_message'				=> "短消息",

	/* 公共语言项 */
	'tips_message' 				 => "提示消息",
	'no_data'                    => '暂无数据',
	'sys_msg'                    => '系统提示',
	'catalog'                    => '目录',
	'please_view_order_detail'   => '商品已发货，详情请到用户中心订单详情查看',
	'user_center'                => '用户中心',
	'shop_closed'                => '本店盘点中，请您稍后再来...',
	'shop_register_closed'       => '该网店暂停注册',
	'shop_upgrade'               => "本店升级中，管理员从 <a href=>\"admin/\">管理中心</a> 登录后，系统会自动完成升级",
	
	'js_languages' => array(
		'process_request' 		 => '正在处理您的请求...',
		'goodsname_not_null' 	 => '商品名不能为空！',
	),

	'process_request'            => '正在处理您的请求...',
	'please_waiting'             => '请稍等, 正在载入中...',
	'icp_number'                 => 'ICP备案证书号',
	'plugins_not_found'          => "插件 %s 无法定位",
	'home'                       => '首页',
	'back_up_page'               => '返回',
	'close_window'               => '关闭窗口',
	'back_home'                  => '返回首页',
	'ur_here'                    => '当前位置:',
	'all_goods'                  => '全部商品',
	'all_recommend'              => "全部推荐",
	'all_attribute'              => "全部",
	'promotion_goods'            => '促销商品',
	'best_goods'                 => '精品推荐',
	'new_goods'                  => '新品上市',
	'hot_goods'                  => '热销商品',
	'view_cart'                  => '查看购物车',
	'catalog'                    => '所有分类',
	'regist_login'               => '注册/登录',
	'profile'                    => '个人资料',
	'query_info'                 => "共执行 %d 个查询，用时 %f 秒，在线 %d 人",
	'gzip_enabled'               => '，Gzip 已启用',
	'gzip_disabled'              => '，Gzip 已禁用',
	'memory_info'                => '，占用内存 %0.3f MB',
	'cart_info'                  => '您的购物车中有 %d 件商品，总计金额 %s。',
	'shopping_and_other'         => '购买过此商品的人还购买过',
	'bought_notes'               => '购买记录',
	'later_bought_amounts'       => '近期成交数量',
	'bought_time'                => '购买时间',
	'turnover'                   => '成交',
	'no_notes'                   => '还没有人购买过此商品',
	'shop_price'                 => '本店售价：',
	'market_price'               => '市场价格：',
	'goods_brief'                => '商品描述',
	'goods_album'                => '商品相册',
	'promote_price'              => "促销价：",
	'fittings_price'             => '配件价格：',
	'collect'                    => '加入收藏夹',
	'add_to_cart'                => '加入购物车',
	'return_to_cart'             => '放回购物车',
	'search_goods'               => '商品搜索',
	'search'                     => '搜索',
	'wholesale_search'           => '搜索批发商品',
	'article_title'              => '文章标题',
	'article_author'             => '作者',
	'article_add_time'           => '添加日期',
	'relative_file'              => '[ 相关下载 ]',
	'category'                   => '分类',
	'brand'                      => '品牌',
	'price_min'                  => '最小价格',
	'price_max'                  => '最大价格',
	'goods_name'                 => '商品名称',
	'goods_attr'                 => '商品属性',
	'goods_price_ladder'         => '价格阶梯',
	'ladder_price'               => '批发价格',
	'shop_prices'                => '本店价',
	'market_prices'              => '市场价',
	'deposit'                    => '团购保证金',
	'amount'                     => '商品总价',
	'number'                     => '购买数量',
	'handle'                     => '操作',
	'add'                        => '添加',
	'edit'                       => '编辑',
	'drop'                       => '删除',
	'view'                       => '查看',
	'modify'                     => '修改',
	'is_cancel'                  => '取消',
	'amend_amount'               => '修改数量',
	'end'                        => '结束',
	'require_field'              => '必填',
	'search_result'              => '搜索结果',
	'order_number'               => '订单号',
	'consignment'                => '发货单',
	'activities'                 => '商品正在进行的活动',
	'remark_package'             => '超值礼包',
	'old_price'                  => '原  价：',
	'package_price'              => '礼包价：',
	'then_old_price'             => '节  省：',
	'free_goods'                 => '免运费商品',

	'searchkeywords_notice'      => '匹配多个关键字全部，可用 "空格" 或 "AND" 连接。如 win32 AND unix<br />匹配多个关键字其中部分，可用"+"或 "OR" 连接。如 win32 OR unix',
	'hidden_outstock'            => '隐藏已脱销的商品',
	'keywords'                   => '关键字',
	'sc_ds'                      => '搜索简介',
	'button_search'              => '立即搜索',
	'no_search_result'           => '无法搜索到您要找的商品！',
	'all_category'               => '所有分类',
	'all_brand'                  => '所有品牌',
	'all_option'                 => '请选择',
	'extension'                  => '扩展选项',
	'gram'                       => '克',
	'kilogram'                   => '千克',
	'goods_sn'                   => '商品货号：',
	'goods_brand'                => '商品品牌：',
	'goods_weight'               => '商品重量：',
	'goods_number'               => '商品库存：',
	'goods_give_integral'        => '购买此商品赠送：',
	'goods_integral'             => '购买此商品可使用：',
	'goods_bonus'                => '购买此商品可获得红包：',
	'goods_free_shipping'        => '此商品为免运费商品，计算配送金额时将不计入配送费用',
	'goods_rank'                 => '用户评价：',
	'goods_compare'              => '商品比较',
	'properties'                 => '商品属性：',
	'brief'                      => '简要介绍：',
	'add_time'                   => '上架时间：',
	'residual_time'              => '剩余时间：',
	'day'                        => '天',
	'hour'                       => '小时',
	'minute'                     => '分钟',
	'compare'                    => '比较',
	'volume_price'               => '购买商品达到以下数量区间时可享受的优惠价格',
	'number_to'                  => '数量',
	'article_list'               => '文章列表',
	'article_detail'             => '问题详情',
	'piece'                      => '件',

	'goods_category'             => "商品分类",
	'menu'                       => "菜单",
	'goods_detail'               => "商品详情",
	'detail_intro'               => "详细介绍",
	'order_detail'               => "订单确认",
	'order_submit'               => "订单提交",
	'select_shipping_method'     => "请选择配送方式",
	'select_payment_method'      => "请选择支付方式",
	'check_out'                  => "立即结算",
	'show_favourable'            => "查看优惠活动",
	'empty_shopping'             => "购物车什么都没有，赶快去购物吧",
	'go_shopping'                => "去购物",
	'shopping_cart'              => "购物车",
	'total_number'               => "件商品",
	'goods_price'                => "总价(不含运费)",
	'favourable_mz'              => "赠",
	'favourable_mj'              => "减",
	'favourable_zk'              => "折",
	'group_buy_act'              => "团",
	'snatch_act'                 => "夺",
	'auction_act'                => "拍卖",

	/* 分类展示页  */
	'sort_default'       => '默认',
	'sort_sales'         => '销量',
	'sort_popularity'    => '人气',
	'sort_price'         => '价格',
	'like_num'           => '人喜欢',
	'like'               => '喜欢',
	'like_last'          => '个',
	'scan_num'           => '次浏览',
	'button_submit'      => '确定',
	'clear_filter'       => '清空',

	/* 商品比较JS语言项 */
	'compare_js' => array(
		'button_compare'       => '比较选定商品',
		'exist'                => '您已经选择了%s',
		'count_limit'          => '最多只能选择4个商品进行对比',
		'goods_type_different' => '\"%s\"和已选择商品类型不同无法进行对比',
	),
		
	'bonus'                      => '优惠券：',
	'no_comments'                => '暂时还没有任何用户评论',
	'give_comments_rank'         => '给出',
	'comments_rank'              => '评价',
	'comment_num'                => "用户评论 %d 条记录",
	'login_please'               => '由于您还没有登录，因此您还不能使用该功能。',
	'collect_existed'            => '该商品已经存在于您的收藏夹中。',
	'collect_success'            => '该商品已经成功地加入了您的收藏夹。',
	'uncollect_success'          => '该商品已经从您的收藏夹中移除。',
	'copyright'                  => "&copy, 2005-%s %s 版权所有，并保留所有权利。",
	'no_ads_id'                  => '没有指定广告的ID以及跳转的URL地址!',
	'remove_collection_confirm'  => '您确定要从收藏夹中删除选定的商品吗？',
	'err_change_attr'            => '没有找到指定的商品或者没有找到指定的商品属性。',

	'collect_goods'  => '收藏商品',
	'plus'           => '加',
	'minus'          => '减',
	'yes'            => '是',
	'no'             => '否',

	'same_attrbiute_goods' => '相同%s的商品',

	/* TAG */
	'button_submit_tag'  => '添加我的标记',
	'tag_exists'         => '您已经为该商品添加过一个标记，请不要重复提交.',
	'tag_cloud'          => '标签云',
	'tag_anonymous'      => '对不起，只有注册会员并且正常登录以后才能提交标记。',
	'tag_cloud_desc'     => '标签云（Tag cloud）是用以表示一个网站中的内容标签。 标签（tag、关键词）是一种更为灵活、有趣的商品分类方式，您可以为每个商品添加一个或多个标签，那么可以通过点击这个标签查看商品其他会员提交的与您的标签一样的商品,能够让您使用最快的方式查找某一个标签的所有网店商品。比方说点击“红色”这个标签，就可以打开这样的一个页面，显示所有的以“红色” 为标签的网店商品',

	/* AJAX 相关 */
	'invalid_captcha'        => '对不起，您输入的验证码不正确。',
	'goods_exists'           => '对不起，您的购物车中已经存在相同的商品。',
	'fitting_goods_exists'   => '对不起，您的购物车中已经添加了该配件。',
	'invalid_number'         => '对不起，您输入了一个非法的商品数量。',
	'not_on_sale'            => '对不起，该商品已经下架。',
	'no_basic_goods'         => '对不起，您希望将该商品做为配件购买，可是购物车中还没有该商品的基本件。',
	'cannt_alone_sale'       => '对不起，该商品不能单独销售。',
	'shortage'               => "对不起，该商品已经库存不足暂停销售。\n你现在要进行缺货登记来预订该商品吗？",
	'shortage_little'        => "该商品已经库存不足。已将您的购货数量修改为 %d。\n您现在要去购物车吗？",
	'oos_tips'               => '该商品已经库存不足。您现在要进行缺货登记吗？',

	'addto_cart_success_1' => "该商品已添加到购物车，您现在还需要继续购物吗？\n如果您希望马上结算，请点击“确定”按钮。\n如果您希望继续购物，请点击“取消”按钮。",
	'addto_cart_success_2' => "该商品已添加到购物车，您现在还需要继续购物吗？\n如果您希望继续购物，请点击“确定”按钮。\n如果您希望马上结算，请点击“取消”按钮。",
	'no_keywords'          => "请输入搜索关键词！",
	'art_no_keywords'      => "输入问题关键字搜索！",
	/* 分页排序 */
	'exchange_sort' => array(
		'goods_id'          => '按上架时间排序',
		'exchange_integral' => '按积分排序',
		'last_update'       => '按更新时间排序',
	),
	'sort' => array( 
		'goods_id'		=> '按上架时间排序',
		'shop_price'	=> '按价格排序',
		'last_update'	=> '按更新时间排序',
	),
	'order' => array(
		'DESC' 	=> '倒序',
		'ASC'	=> '正序',
	),
	'pager_1'		=> '总计 ',
	'pager_2'    	=> ' 个记录',
	'pager_3'   	=> '，共 ',
	'pager_4'     	=> ' 页。',
	'page_first'  	=> '第一页',
	'page_prev'   	=> '上一页',
	'page_next'   	=> '下一页',
	'page_last'    	=> '最末页',
	'btn_display' 	=> '显示方式',

	/* 投票 */
	'vote_times'     => '参与人次',
	'vote_ip_same'   => '对不起，您已经投过票了!',
	'submit_vote'    => '投票',
	'submit_reset'   => '重选',
	'vote_success'   => '恭喜你，投票成功',

	/* 评论 */
	'cmt_submit_done'                => '您的评论已成功发表, 感谢您的参与!',
	'cmt_submit_wait'                => "您的评论已成功发表, 请等待管理员的审核!",
	
	'cmt_lang' => array(
		'cmt_empty_username' 	=> '请输入您的用户名称',
		'cmt_empty_email'    	=> '请输入您的电子邮件地址',
		'cmt_error_email'    	=> '电子邮件地址格式不正确',
		'cmt_empty_content'  	=> '您没有输入评论的内容',
		'captcha_not_null'   	=> '验证码不能为空!',
		'cmt_invalid_comments' 	=> '无效的评论内容!',
	),
	'cmt_spam_warning'               => '您至少在30秒后才可以继续发表评论!',
	'invalid_comments'               => '无效的评论内容!',
	'error_email'                    => '电子邮件地址格式不正确!',
	'admin_username'                 => "管理员：",
	'reply_comment'                  => '回复',
	'comment_captcha'                => '验证码',
	'comment_login'                  => '只有注册会员才能发表评论，请您登录后再发表评论',
	'comment_custom'                 => '评论失败。只有在本店购买过商品的注册会员才能发表评论。',
	'comment_brought'                => '评论失败。只有购买过此商品的注册用户才能评论该商品。',
	'anonymous'                      => '匿名用户',

	'five_stars'  => '非常好',
	'four_stars'  => '很好',
	'three_stars' => '一般',
	'two_stars'   => '不行',
	'one_stars'   => '很差',

	'all_comment'       => '全部',
	'favorable_comment' => '好评',
	'medium_comment'    => '中评',
	'bad_comment'       => '差评',
	/* 其他信息 */


	/* 商品比较 */
	'compare_remove'   => '移除',
	'compare_no_goods' => '您没有选定任何需要比较的商品或者比较的商品数少于 2 个。',

	'no_user_name'   => '该用户名不存在',
	'undifine_rank'  => '没有定义会员等级',
	'not_login'      => '您还没有登陆',
	'half_info'      => '信息不全，请填写所有信息',
	'no_id'          => '没有商品ID',
	'save_success'   => '修改成功',
	'drop_consignee_confirm' => '您确定要删除该收货人信息吗？',

	/* 夺宝奇兵 */
	'snatch_js' => array(
		'price_not_null'    => '价格不能为空',
		'price_not_number'  => '价格只能是数字',
	),
	'snatch_list'                    => '夺宝奇兵列表',
	'not_in_range'                   => '你只能在%d到%d之间出价',
	'also_bid'                       => '你已经出过价格 %s 了',
	'lack_pay_points'                => '你积分不够，不能出价',
	'snatch'                         => '夺宝奇兵',
	'snatch_is_end'                  => '活动已经结束',
	'snatch_start_time'              => '本次活动从 %s 到 %s 截止',
	'price_extent'                   => '出价范围为',
	'user_to_use_up'                 => '用户可多次出价，每次消耗',
	'snatch_victory_desc'            => '当本期活动截止时，系统将从所有竞价奖品的用户中，选出在所有竞价中出价最低、且没有其他出价与该价格重复的用户（即最低且唯一竞价），成为该款奖品的获胜者.',
	'price_less_victory'             => '如果用户获胜的价格低于',
	'price_than_victory'             => '将能按当期竞拍价购得该款奖品；如果用户获胜的价格高于',
	'or_can'                         => '则能以',
	'shopping_product'               => '购买该款奖品',
	'victory_price_product'          => '获胜用户将能按当期竞拍价购得该款奖品.',
	'now_not_snatch'                 => '当前没有活动',
	'my_integral'                    => '我的积分',
	'bid'                            => '出价',
	'me_bid'                         => '我要出价',
	'me_now_bid'                     => '我的出价',
	'only_price'                     => '唯一价格',
	'view_snatch_result'             => '活动结果',
	'victory_user'                   => '获奖用户',
	'price_bid'                      => '所出价格',
	'bid_time'                       => '出价时间',
	'not_victory_user'               => '没有获奖用户',
	'snatch_log'                     => '参加夺宝奇兵%s ',
	'not_for_you'                    => '你不是获胜者，不能购买',
	'order_placed'                   => '您已经下过订单了，如果您想重新购买，请先取消原来的订单',

	/* 购物流程中的前台部分 */
	'select_spe' 			 => '请选择商品属性',

	/* 购物流程中的订单部分 */
	'price'                  => '价格',
	'name'                   => '名称',
	'describe'               => '描述',
	'fee'                    => '费用',
	'free_money'             => '免费额度',
	'img'                    => '图片',
	'no_pack'                => '不要包装',
	'no_card'                => '不要贺卡',
	'bless_note'             => '祝福语',
	'use_integral'           => '使用积分',
	'can_use_integral'       => '您当前的可用积分为',
	'noworder_can_integral'  => '本订单最多可以使用',
	'use_surplus'            => '余额付款',
	'your_surplus'           => '您当前的可用余额为',
	'pay_fee'                => '支付手续费',
	'insure_fee'             => '保价费用',
	'need_insure'            => '配送是否需要保价',
	'cod'                    => '配送决定',

	'curr_stauts'            => '当前状态',
	'use_bonus'              => '使用红包',
	'no_use_bonus'           => '不使用红包',
	'use_bonus_kill'         => '使用线下红包',
	'invoice'                => '开发票',
	'invoice_type'           => '发票类型',
	'invoice_title'          => '发票抬头',
	'please_invoice_title'   => '请输入发票抬头',
	'invoice_content'        => '发票内容',
	'order_postscript'       => '订单附言',
	'please_order_postscript' => '请输入订单附言',
	'booking_process'        => '缺货处理',
	'complete_acquisition'   => '该订单完成后，您将获得',
	'with_price'             => '以及价值',
	'de'                     => '的',
	'bonus'                  => '红包',
	'goods_all_price'        => '商品总价',
	'discount'               => '折扣',
	'tax'                    => '发票税额',
	'shipping_fee'           => '配送费用',
	'pack_fee'               => '包装费用',
	'card_fee'               => '贺卡费用',
	'total_fee'              => '应付款金额',
	'self_site'              => '本站',
	'order_gift_integral'    => '订单 %s 赠送的积分',
	'order_payed_sms'        => '订单 %s 付款了。收货人：%s；电话：%s。',

	/* 缺货处理 */
	'oos' => array(
		OOS_WAIT      => '等待所有商品备齐后再发',
		OOS_CANCEL    => '取消订单',
		OOS_CONSULT   => '与店主协商',
	),
		
	/* 评论部分 */
	'username'           => '用户名',
	'email'              => '电子邮件地址',
	'comment_rank'       => '评价等级',
	'comment_content'    => '评论内容',
	'submit_comment'     => '提交评论',
	'button_reset'       => '重置表单',
	'goods_comment'      => '商品评论',
	'article_comment'    => '文章评论',
	'comment_num'        => '人评价',

	/* 支付确认部分 */
	'pay_status'         => '支付状态',
	'pay_not_exist'      => '此支付方式不存在或者参数错误！',
	'pay_disabled'       => '此支付方式还没有被启用！',
	'pay_success'        => '您此次的支付操作已成功！',
	'pay_fail'           => '支付操作失败，请返回重试！',

	/* 文章部分 */
	'shophelp'               => '服务中心',
	'new_article'            => '最新文章',
	'shop_notice'            => '商店公告',
	'order_already_received' => '此订单已经确认过了，感谢您在本站购物，欢迎再次光临。',
	'order_invalid'          => '您提交的订单不正确。',
	'act_ok'                 => '谢谢您通知我们您已收到货，感谢您在本站购物，欢迎再次光临。',
	'receive'                => '收货确认',
	'buyer'                  => '买家',
	'next_article'           => '下一篇',
	'prev_article'           => '上一篇',

	/* 虚拟商品 */
	'virtual_goods_ship_fail' => '自动发货失败，请尽快联系商家重新发货',

	/* 选购中心 */
	'pick_out'           => '选购中心',
	'fit_count'          => "共有 %s 件商品符合条件",
	'goods_type'         => "商品类型",
	'remove_all'         => '移除所有',
	'advanced_search'    => '高级搜索',
	'activity'           => '本商品正在进行',
	'order_not_exists'   => "非常抱歉，没有找到指定的订单。请和网站管理员联系。",

	'promotion_time' => '活动时间：%s ～ %s',

	/* 倒计时 */
	'goods_js' => array(
		'day'    => '天',
		'hour'   => '小时',
		'minute' => '分钟',
		'second' => '秒',
		'end'    => '结束',
	),
		
	'favourable' => '优惠活动',

	/* 团购部分语言项 */
	'group_buy'              => '团购活动',
	'group_buy_goods'        => '团购商品',
	'gb_goods_name'          => '团购商品：',
	'gb_start_date'          => '开始时间：',
	'gb_end_date'            => '结束时间：',
	'gbs_pre_start'          => '该团购活动尚未开始，请继续关注。',
	'gbs_under_way'          => '该团购活动正在火热进行中，距离结束时间还有：',
	'gbs_finished'           => '该团购活动已结束，正在等待处理...',
	'gbs_succeed'            => '该团购活动已成功结束！',
	'gbs_fail'               => '该团购活动已结束，没有成功。',
	'gb_price_ladder'        => '价格阶梯：',
	'gb_ladder_amount'       => '数量',
	'gb_ladder_price'        => '价格',
	'gb_deposit'             => '保证金：',
	'gb_restrict_amount'     => '限购数量：',
	'gb_gift_integral'       => '赠送积分：',
	'gb_cur_price'           => '当前价格：',
	'gb_valid_goods'         => '当前定购数量：',
	'gb_final_price'         => '成交价格：',
	'gb_final_amount'        => '成交数量：',
	'gb_notice_login'        => '提示：您需要先注册成为本站会员并且登录后，才能参加商品团购!',
	'gb_error_goods_lacking' => '对不起，商品库存不足，请您修改数量！',
	'gb_error_status'        => '对不起，该团购活动已经结束或尚未开始，现在不能参加！',
	'gb_error_login'         => '对不起，您没有登录，不能参加团购，请您先登录！',
	'group_goods_empty'      => '当前没有团购活动',

	/* 拍卖部分语言项 */
	'auction'                => '拍卖活动',
	'act_status'             => '活动状态',
	'au_current_price'       => '当前价格',
	'act_start_time'         => '开始时间',
	'act_end_time'           => '结束时间',
	'au_start_price'         => '起拍价',
	'au_end_price'           => '一口价',
	'au_amplitude'           => '加价幅度',
	'au_deposit'             => '保证金',
	'no_auction'             => '当前没有拍卖活动',
	'au_pre_start'           => '该拍卖活动尚未开始',
	'au_under_way'           => '该拍卖活动正在进行中，距离结束时间还有：',
	'au_under_way_1'         => '该拍卖活动正在进行中',
	'au_bid_user_count'      => '已出价人数',
	'au_last_bid_price'      => '最后出价',
	'au_last_bid_user'       => '最后出价的买家',
	'au_last_bid_time'       => '最后出价时间',
	'au_finished'            => '该拍卖活动已结束',
	'au_bid_user'            => '买家',
	'au_bid_price'           => '出价',
	'au_bid_time'            => '时间',
	'au_bid_status'          => '状态',
	'no_bid_log'             => '暂时没有买家出价',
	'au_bid_ok'              => '领先',
	'au_i_want_bid'          => '我要出价',
	'button_bid'             => '出价',
	'button_buy'             => '立即购买',
	'au_not_under_way'       => '拍卖活动已结束，不能再出价了',
	'au_bid_price_error'     => '请输入正确的价格',
	'au_bid_after_login'     => '您只有注册成为会员并且登录之后才能出价',
	'au_bid_repeat_user'     => '您已经是这个商品的最高出价人了',
	'au_your_lowest_price'   => '您的出价不能低于 %s',
	'au_user_money_short'    => '您的可用资金不足，请先到用户中心充值',
	'au_unfreeze_deposit'    => '解冻拍卖活动的保证金：%s',
	'au_freeze_deposit'      => '冻结拍卖活动的保证金：%s',
	'au_not_finished'        => '该拍卖活动尚未结束，不能购买',
	'au_order_placed'        => '您已经下过订单了，如果您想重新购买，请先取消原来的订单',
	'au_no_bid'              => '该拍卖活动没有人出价，不能购买',
	'au_final_bid_not_you'   => '您不是最高出价者，不能购买',
	'au_buy_after_login'     => '请您先登录',
	'au_is_winner'           => '恭喜您，您已经赢得了该商品的购买权。请点击下面的购买按钮将您的宝贝买回家吧。',

	/* 批发部分语言项 */
	'ws_user_rank'               => '您的等级暂时无法查看批发方案',
	'ws_login_please'            => '请您先登录',
	'ws_return_home'             => '返回首页',
	'wholesale'                  => '批发',
	'no_wholesale'               => '没有批发商品',
	'ws_price'                   => '批发价',
	'ws_subtotal'                => '小计',
	'ws_invalid_goods_number'    => '请输入正确的数量',
	'ws_attr_not_matching'       => '您选择的商品属性不存在，请参照批发价格单选择',
	'ws_goods_number_not_enough' => '您购买的数量没有达到批发的最小数量，请参照批发价格单',
	'ws_goods_attr_exists'       => '该商品已经在购物车中，不能再次加入',
	'ws_remark'                  => '请输入您的联系方式、付款方式和配送方式等信息',
	'ws_order_submitted'         => '您的订单已提交成功，请记住您的订单号: %s。',
	'ws_price_list'              => '价格单',

	/* 积分兑换部分语言项 */
	'exchange'           => '积分商城',
	'exchange_num'       => '兑换量',
	'exchange_integral'  => '积分',
	'exchange_goods'     => '立刻兑换',
	'eg_error_login'     => '对不起，您没有登录，不能参加兑换，请您先登录！',
	'eg_error_status'    => '对不起，该商品已经取消，现在不能兑换！',
	'eg_error_integral'  => '对不起，您现有的积分值不够兑换本商品！',
	'notice_eg_integral' => '积分商城商品需要消耗积分：',
	'eg_error_number'    => '对不起，该商品库存不足，现在不能兑换！',

	/* 会员登录注册 */
	'member_name'        => '会员',
	'password'           => '密码',
	'confirm_password'   => '确认密码',
	'sign_up'            => '注册新会员',
	'forgot_password'    => '忘记密码',
	'hello'              => '您好',
	'welcome_return'     => '欢迎您回来',
	'now_account'        => '您的账户中现在有',
	'balance'            => '余额',
	'along_with'         => '以及',
	'preferential'       => '优惠券',
	'edit_user_info'     => '进入用户中心',
	'logout'             => '退出',
	'user_logout'        => '退出',
	'welcome'            => '欢迎光临本店',
	'user_login'         => '会员登陆',
	'login_now'          => '立即登陆',
	'login'              => '登录',
	'bind_signin'        => '第三方登录',
	'input_name'         => '请输入用户名',
	'set_your_password'  => '请设置登录密码',
	'name_or_mobile'     => '请输入用户名或手机号',
	'input_passwd'       => '请输入密码',
	'next'               => '下一步',
	'reg_now'            => '立即注册',

	/* 商品品牌页 */
	'official_site'      => '官方网站：',
	'brand_category'     => '分类浏览：',
	'all_category'       => '所有分类',

	/* 商品分类页 */
	'goods_filter'       => '筛选',

	/* cls_image类的语言项 */
	'directory_readonly'         => '目录 % 不存在或不可写',
	'invalid_upload_image_type'  => '不是允许的图片格式',
	'upload_failure'             => '文件 %s 上传失败。',
	'missing_gd'                 => '没有安装GD库',
	'missing_orgin_image'        => '找不到原始图片 %s ',
	'nonsupport_type'            => '不支持该图像格式 %s ',
	'creating_failure'           => '创建图片失败',
	'writting_failure'           => '图片写入失败',
	'empty_watermark'            => '水印文件参数不能为空',
	'missing_watermark'          => '找不到水印文件%s',
	'create_watermark_res'       => '创建水印图片资源失败。水印图片类型为%s',
	'create_origin_image_res'    => '创建原始图片资源失败，原始图片类型%s',
	'invalid_image_type'         => '无法识别水印图片 %s ',
	'file_unavailable'           => '文件 %s 不存在或不可读',

	/* 邮件发送错误信息 */
	'smtp_setting_error'     => '邮件服务器设置信息不完整',
	'smtp_connect_failure'   => '无法连接到邮件服务器 %s',
	'smtp_login_failure'     => '邮件服务器验证帐号或密码不正确',
	'smtp_refuse'            => '服务器拒绝发送该邮件',
	'sendemail_false'        => "邮件发送失败，请与网站管理员联系！",
	'disabled_fsockopen'     => 'fsockopen函数被禁用',

	'topic_goods_empty'  => '当前没有专题商品',
	'email_list_ok'      => '订阅',
	'email_list_cancel'  => '退订',
	'email_invalid'      => '邮件地址非法！',
	'email_alreadyin_list' => '邮件地址已经存在于列表中！',
	'email_notin_list'   => '邮件地址不在列表中！',
	'email_re_check'     => '已经重新发送验证邮件，请查收并确认！',
	'email_check'        => '请查收邮件进行确认操作！',
	'email_not_alive'    => '此邮件地址是未验证状态，不需要退订！',
	'check_mail'         => '验证邮件',
	'check_mail_content' => "%s 您好：<br><br>这是由%s发送的邮件订阅验证邮件,点击以下的链接地址,完成验证操作。<br><a href=>\"%s\" target=>\"_blank\">%s</a>\n<br><br>%s<br>%s",
	'email_checked'      => '邮件已经被确认！',
	'hash_wrong'         => '验证串错误！请核对验证串或输入email地址重新发送验证串！',
	'email_canceled'     => '邮件已经被退定！',
	'goods_click_count'  => '商品点击数',
		
	'p_y' => array(
		'link_start'  => '',
		'link_p'      => '',
		'link_r'      => '',
		'link_b'      => '',
		'main_start'  => '',
		'main_e'      => '',
		'main_c'      => '',
		'main_p'      => '',
		'v_s'         => '',
		'v'           => '',
		'link_end'    => '',
	),

	/* 虚拟卡 */
	'card_sn'            => '卡片序号',
	'card_password'      => '卡片密码',
	'end_date'           => '截至日期',
	'virtual_card_oos'   => '虚拟卡已缺货',

	/* 订单状态查询 */
	'invalid_order_sn'   => '无效订单号',
	'order_status'       => '订单状态',
	'shipping_date'      => '发货时间',
	'query_order'        => '查询该订单号',
	'order_query_toofast' => '您的提交频率太高，歇会儿再查吧。',

	'online_info'        => '当前共有 %s 人在线',

	/* 按钮 */
	'btn_direct_buy'     => '直接购买',
	'btn_buy'            => '购买',
	'btn_collect'        => '收藏',
	'btn_add_to_cart'    => '加入购物车',
	'btn_add_to_collect' => '添加收藏',
	'goods_booking'      => '商品无货',
	'stock_up'           => '缺货',
	'hot_search'         => '热门搜索',
	'please_select_attr' => '你加入购物车的商品有不同型号可选，你是否要立即跳转到商品详情选择型号？',

	/* 促销信息栏 */
	'snatch_promotion'       => '[夺宝]',
	'group_promotion'        => '[团购]',
	'auction_promotion'      => '[拍卖]',
	'favourable_promotion'   => '[优惠]',
	'wholesale_promotion'    => '[批发]',
	'package_promotion'      => '[礼包]',

	/* feed推送 */
	'feed_user_buy'      => "购买了",
	'feed_user_comment'  => "评论了",
	'feed_goods_price'   => "商品价格",
	'feed_goods_desc'    => "商品描述",

	/* 留言板 */
	'shopman_comment'    => '商品评论',
	'message_ping'       => '评',
	'message_board'      => "留言板",
	'post_message'       => "我要留言",
	'message_title'      => '主题',
	'message_time'       => '留言时间',
	'reply_time'         => '回复时间',
	'shop_owner_reply'   => '店主回复',
	'message_board_type' => '留言类型',
	'message_content'    => '留言内容',
	'message_anonymous'  => '匿名留言',
			
	'message_type' => array(
		M_MESSAGE    => '留言',
		M_COMPLAINT  => '投诉',
		M_ENQUIRY    => '询问',
		M_CUSTOME    => '售后',
		M_BUY      => '求购',
		M_BUSINESS   => '商家留言',
		M_COMMENT    => '评论',
	),
	'message_board_js' => array(
		'msg_empty_email'    => '请输入您的电子邮件地址',
		'msg_error_email'    => '电子邮件地址格式不正确',
		'msg_title_empty'    => '留言标题为空',
		'msg_content_empty'  => '留言内容为空',
		'msg_captcha_empty'  => '验证码为空',
		'msg_title_limit'    => '留言标题不能超过200个字',
	),

	'message_submit_wait'    => '您的留言已成功发表, 请等待管理员的审核!',
	'message_submit_done'    => '发表留言成功',
	'message_board_close'    => "暂停留言板功能",
	'upload_file_limit'      => '文件大小超过了限制 %dKB',
	'message_list_lnk'       => '返回留言列表',

	/* 报价单 */
	'quotation'       => "报价单",
	'print_quotation' => "打印报价单",
	'goods_inventory' => "库存",
	'shopman_reply'   => '管理员回复',
	'specifications'  => '规格',

	/* 相册JS语言项 */
	'gallery_js' => array('close_window' => '您是否关闭当前窗口'),
	'submit'         => '提 交',
	'reset'          => '重 置',
	'order_query'    => '订单查询',
	'shipping_query' => '发货查询',
	'view_history'   => '浏览历史',
	'clear_history'  => '[清空]',
	'no_history'     => '您已清空最近浏览过的商品',
	'goods_tag'      => '商品标签',
	'releate_goods'  => '猜你喜欢',
	'goods_list'     => '商品列表',
	'favourable_goods'    => '收藏该商品',
	'accessories_releate' => '相关配件',
	'article_releate'     => '相关文章',
	'email_subscribe'     => '邮件订阅',
	'consignee_info'      => '收货人信息',
	'user_comment'        => '用户评论',
	'total'               => '共',
	'user_comment'        => '评论',
	'user_comment_num'    => '条',
	'auction_goods'       => '拍卖商品',
	'auction_goods_info'  => '拍卖商品详情',
	'article_cat'         => '文章分类',
	'online_vote'         => '在线调查',
	'new_price'           => '最新出价',
	'promotion_info'      => '促销信息',
	'price_grade'         => '价格范围',
	'your_choice'         => '您的选择',
	'system_info'         => '系统信息',
	'all_tags'            => '所有标签',
	'activity_list'       => '活动列表',
	'package_list'        => '礼包列表',
	'treasure_info'       => '宝贝详情',
	'activity_desc'       => '活动描述',
	'activity_intro'      => '活动介绍',
	'get_password'        => '找回密码',
	'fee_total'           => '费用总计',
	'other_info'          => '其它信息',
	'user_balance'        => '会员余额',
	'wholesale_goods_cart' => '批发商品购物车',
	'wholesale_goods_list' => '批发商品列表',
	'wholesale_goods_info' => '批发商品',
	'bid_record'          => '出价记录',
	'shipping_method'     => '配送方式',
	'payment_method'      => '支付方式',
	'goods_package'       => '商品包装',
	'goods_card'          => '祝福贺卡',
	'groupbuy_intro'      => '团购说明',
	'groupbuy_goods_info' => '团购商品详情',
	'act_time'            => '起止时间',
	'top10'               => '销售排行',

	/* 优惠活动 */
	'label_act_name'     => '优惠活动名称：',
	'label_start_time'   => '优惠开始时间：',
	'label_end_time'     => '优惠结束时间：',
	'label_user_rank'    => '享受优惠的会员等级：',
	'not_user'           => '非会员',
	'label_act_range'    => '优惠范围：',
	'far_all'            => '全部商品',
	'far_category'       => '以下分类',
	'far_brand'          => '以下品牌',
	'far_goods'          => '以下商品',
	'label_min_amount'   => '金额下限：',
	'label_max_amount'   => '金额上限：',
	'notice_max_amount'  => '0表示没有上限',
	'label_act_type'     => '优惠方式：',
	'fat_goods'          => '享受赠品（特惠品）',
	'fat_price'          => '享受现金减免',
	'fat_discount'       => '享受价格折扣',
	'orgtotal'           => '原始价格',
	'heart_buy'          => '心动不如行动',

	/* 其他模板涉及常用语言项 */
	'label_regist'       => '用户注册',
	'label_login'        => '用户登录',
	'label_profile'      => '用户信息',
	'label_collection'   => '我的收藏',
	'article_list'       => '文章列表',
	'preferences_price'  => '优惠价格',
	'divided_into'       => '分成规则',

	/*------------------------------------------------------ */
	//-- 操作类型
	/*------------------------------------------------------ */
	'log_action' => array(
		'add'              => '添加',
		'remove'           => '删除',
		'edit'             => '编辑',
		'install'          => '安装',
		'uninstall'        => '卸载',
		'setup'            => '设置',
		'batch_remove'     => '批量删除',
		'trash'            => '回收',
		'restore'          => '还原',
		'batch_trash'      => '批量回收',
		'batch_restore'    => '批量还原',
		'batch_upload'     => '批量上传',
		'batch_edit'       => '批量编辑',

	/*------------------------------------------------------ */
	//-- 操作内容
	/*------------------------------------------------------ */
		'users'            => '会员账号',
		'shipping'         => '配送方式',
		'shipping_area'    => '配送区域',
		'area_region'      => '配送区域中的地区',
		'brand'            => '品牌管理',
		'category'         => '商品分类',
		'pack'             => '商品包装',
		'card'             => '商品贺卡',
		'articlecat'       => '文章分类',
		'article'          => '文章',
		'shophelp'         => '网店帮助文章',
		'shophelpcat'      => '网店帮助分类',
		'shopinfo'         => '网店信息文章',
		'attribute'        => '属性',
		'privilege'        => '权限管理',
		'user_rank'        => '会员等级',
		'snatch'           => '夺宝奇兵',
		'bonustype'        => '红包类型',
		'userbonus'        => '用户红包',
		'vote'             => '在线调查',
		'friendlink'       => '友情链接',
		'goods'            => '商品',
		'payment'          => '支付方式',
		'order'            => '订单',
		'agency'           => '办事处',
		'auction'          => '拍卖活动',
		'favourable'       => '优惠活动',
		'wholesale'        => '批发活动',
	
		'adminlog'         => '操作日志',
		'admin_message'    => '管理员留言',
		'users_comment'    => '用户评论',
		'ads_position'     => '广告位置',
		'ads'              => '广告',
		'area'             => '地区',
	
		'group_buy'        => '团购商品',
		'goods_type'       => '商品类型',
		'booking'          => '缺货登记管理',
		'tag_manage'       => '标签管理',
		'shop_config'      => '商店设置',
		'languages'        => '前台语言项',
		'user_surplus'     => '会员余额',
		'message'          => '会员留言',
		'fckfile'          => 'FCK文件',
	
		'db_backup'        => '数据库备份',
		'package'          => '超值礼包',
		'exchange_goods'   => '积分可兑换的商品',
		'suppliers'        => '供货商管理',
		'reg_fields'       => '会员注册项',
	),
			
	/*------------------------------------------------------ */
	//-- 购物流程
	/*------------------------------------------------------ */
	'flow_login_register' => array(
		'username_not_null'   => '请您输入用户名。',
		'username_invalid'    => '您输入了一个无效的用户名。',
		'password_not_null'   => '请您输入密码。',
		'email_not_null'      => '请您输入电子邮件。',
		'email_invalid'       => '您输入的电子邮件不正确。',
		'password_not_same'   => '您输入的密码和确认密码不一致。',
		'password_lt_six'     => '密码不能小于6个字符。',
	),
	'regist_success' => "恭喜您，%s 账号注册成功!",
	'login_success'  => '恭喜！您已经成功登陆本站！',
	'order_list'     => '订单列表',

	/* 购物车 */
	'buy_now'                        => '立即购买',
	'update_cart'                    => '更新购物车',
	'back_to_cart'                   => '返回购物车',
	'update_cart_notice'             => '购物车更新成功，请您重新选择您需要的赠品。',
	'direct_shopping'                => '直接购买',
	'goods_not_exists'               => '对不起，指定的商品不存在',
	'drop_goods_confirm'             => '您确定要把该商品移出购物车吗？',
	'goods_number_not_int'           => '请您输入正确的商品数量。',
	'stock_insufficiency'            => '非常抱歉，您选择的商品 %s 的库存数量只有 %d，您最多只能购买 %d 件。',
	'package_stock_insufficiency'    => '非常抱歉，您选择的超值礼包数量已经超出库存。请您减少购买量或联系商家。',
	'shopping_flow'                  => '购物流程',
	'username_exists'                => '您输入的用户名已存在，请换一个试试。',
	'email_exists'                   => '您输入的电子邮件已存在，请换一个试试。',
	'surplus_not_enough'             => '您使用的余额不能超过您现有的余额。',
	'integral_not_enough'            => '您使用的积分不能超过您现有的积分。',
	'integral_too_much'              => "您使用的积分不能超过%d",
	'invalid_bonus'                  => "您选择的红包并不存在。",
	'no_goods_in_cart'               => '您的购物车中没有商品！',
	'not_submit_order'               => '您参与本次团购商品的订单已提交，请勿重复操作！',
	'pay_success'                    => '本次支付已经成功，我们将尽快为您发货。',
	'pay_fail'                       => '本次支付失败，请及时和我们取得联系。',
	'pay_disabled'                   => '您选用的支付方式已经被停用。',
	'pay_invalid'                    => '您选用了一个无效的支付方式。该支付方式不存在或者已经被停用。请您立即和我们取得联系。',
	'flow_no_shipping'               => '您必须选定一个配送方式。',
	'flow_no_payment'                => '您必须选定一个支付方式。',
	'pay_not_exist'                  => '选用的支付方式不存在。',
	'storage_short'                  => '库存不足',
	'subtotal'                       => '小计',
	'accessories'                    => '配件',
	'largess'                        => '赠品',
	'shopping_money'                 => '购物金额小计 %s',
	'than_market_price'              => '比市场价 %s 节省了 %s (%s)',
	'your_discount'                  => '根据优惠活动<span color=>red>%s</span>，您可以享受折扣 %s',
	'no'                             => '无',
	'not_support_virtual_goods'      => '购物车中存在非实体商品,不支持匿名购买,请登陆后在购买',
	'not_support_insure'             => '不支持保价',
	'clear_cart'                     => '清空购物车',
	'drop_to_collect'                => '放入收藏夹',
			
	'password_js' => array(
		'show_div_text'   => '请点击更新购物车按钮',
		'show_div_exit'   => '关闭',
	),
					
	'goods_fittings'                 => '商品相关配件',
	'parent_name'                    => '相关商品：',
	'remark_package'                 => '礼包',

	/* 优惠活动 */
	'favourable_name'        => '活动名称：',
	'favourable_period'      => '优惠期限：',
	'favourable_range'       => '优惠范围：',
	'favourable_amount'      => '金额区间：',
	'favourable_type'        => '优惠方式：',
			
	'far_ext' => array(
		FAR_ALL       => '全部商品',
		FAR_BRAND     => '以下品牌',
		FAR_CATEGORY  => '以下分类',
		FAR_GOODS     => '以下商品',
		FAT_DISCOUNT  => '享受 %d%% 的折扣',
		FAT_GOODS     => '从下面的赠品（特惠品）中选择 %d 个（0表示不限制数量）',
		FAT_PRICE     => '直接减少现金 %d',
	),
			
	'favourable_not_exist'       => '您要加入购物车的优惠活动不存在',
	'favourable_not_available'   => '您不能享受该优惠',
	'favourable_used'            => '该优惠活动已加入购物车了',
	'pls_select_gift'            => '请选择赠品（特惠品）',
	'gift_count_exceed'          => '您选择的赠品（特惠品）数量超过上限了',
	'gift_in_cart'               => '您选择的赠品（特惠品）已经在购物车中了：%s',
	'label_favourable'           => '优惠活动',
	'label_collection'           => '我的收藏',
	'collect_to_flow'            => '立即购买',

	/* 登录注册 */
	'forthwith_login'            => '登录',
	'forthwith_register'         => '注册新用户',
	'message_authentication_code' => '请输入收到的短信验证码',
	'input_verification'         => '输入验证码',
	'return_verification'        => '获取验证码',
	'invitation_code'            => '可输入好友的邀请码（选填）',
	'login_finish'               => '完成',
	'set_password'               => '设置密码',
	'reset_new_password'         => '设置新密码',
	'input_new_password'         => '请输入新密码',
	'input_new_password_again'   => '请再次输入新密码',
	'signin_failed'              => '对不起，登录失败，请检查您的用户名和密码是否正确',
	'gift_remainder'             => '说明：在您登录或注册后，请到购物车页面重新选择赠品。',

	/* 收货人信息 */
	'flow_js' => array(
		'consignee_not_null'  => '收货人姓名不能为空！',
		'country_not_null'    => '请您选择收货人所在国家！',
		'province_not_null'   => '请您选择收货人所在省份！',
		'city_not_null'       => '请您选择收货人所在城市！',
		'district_not_null'   => '请您选择收货人所在区域！',
		'invalid_email'       => '您输入的邮件地址不是一个合法的邮件地址。',
		'address_not_null'    => '收货人的详细地址不能为空！',
		'tele_not_null'       => '电话不能为空！',
		'shipping_not_null'   => '请您选择配送方式！',
		'payment_not_null'    => '请您选择支付方式！',
		'goodsattr_style'     => 1,
		'tele_invaild'        => '电话号码不有效的号码',
		'zip_not_num'         => '邮政编码只能填写数字',
		'mobile_invaild'      => '手机号码不是合法号码',
		'mobile_not_null'     => '手机号码不能为空',
	),
			
	'new_consignee_address'  => '新收货地址',
	'consignee_address'      => '收货地址',
	'consignee_name'         => '收货人姓名',
	'country_province'       => '配送区域',
	'please_select'          => '请选择',
	'city_district'          => '城市/地区',
	'email_address'          => '电子邮件地址',
	'detailed_address'       => '详细地址',
	'postalcode'             => '邮政编码',
	'phone'                  => '电话',
	'mobile'                 => '手机',
	'backup_phone'           => '手机',
	'sign_building'          => '标志建筑',
	'deliver_goods_time'     => '最佳送货时间',
	'default'                => '默认',
	'default_address'        => '默认地址',
	'confirm_submit'         => '确认提交',
	'confirm_edit'           => '确认修改',
	'country'                => '国家',
	'province'               => '省份',
	'city'                   => '城市',
	'area'                   => '所在区域',
	'consignee_add'          => '添加新收货地址',
	'shipping_address'       => '配送至这个地址',
	'address_amount'         => '您的收货地址最多只能是三个',
	'not_fount_consignee'    => '对不起，您选定的收货地址不存在。',

	/*------------------------------------------------------ */
	//-- 订单提交
	/*------------------------------------------------------ */

	'goods_amount_not_enough' => '您购买的商品没有达到本店的最低限购金额 %s ，不能提交订单。',
	'balance_not_enough'      => '您的余额不足以支付整个订单，请选择其他支付方式',
	'select_shipping'         => '您选定的配送方式为',
	'select_payment'          => '您选定的支付方式为',
	'change_payment'          => '或更换支付方式',
	'order_amount'            => '您的应付款金额为',
	'remember_order_number'   => '请记住您的订单号：',
	'back_home'               => '返回首页',
	'goto_user_center'        => '用户中心',
	'order_submit_back'       => '您可以 %s 或去 %s',

	'order_placed_sms'        => "您有新订单.收货人:%s 电话:%s",
	'sms_paid'                => '已付款',

	'notice_gb_order_amount'  => '（备注：团购如果有保证金，第一次只需支付保证金和相应的支付费用）',

	'order_effective'        => '订单已生效',
	'pay_order'              => '支付订单 %s',
	'validate_bonus'         => '验证红包',
	'input_bonus_no'         => '或者输入红包序列号',
	'select_bonus'           => '选择已有红包',
	'bonus_sn_error'         => '该红包序列号不正确',
	'bonus_min_amount_error' => '订单商品金额没有达到使用该红包的最低金额 %s',
	'bonus_is_ok'            => '该红包序列号可以使用，可以抵扣 %s',

	'shopping_myship'    => '我的配送',
	'shopping_activity'  => '活动列表',
	'shopping_package'   => '超值礼包列表',
);

//end