<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>�����Ʒ</title>
        <meta http-equiv="content-type" content="text/html;charset=gbk">
        <link href="<?php echo ADMIN_CSS_URL; ?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">��ǰλ���ǣ���Ʒ����-�������Ʒ��Ϣ</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="./index.php?r=houtai/goods/show">�����ء�</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="./admin.php?c=goods&a=add" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>��Ʒ����</td>
                    <td><input type="text" name="f_goods_name" /></td>
                </tr>
                <tr>
                    <td>��Ʒ����</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option value="0">��ѡ��</option>
                            {foreach from=$s_category_info key=_k item=_v}
                            <option value="{$_v.category_id}">{$_v.category_name}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>��ƷƷ��</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">��ѡ��</option>
                            {foreach from=$s_brand_info key=_k item=_v}
                            <option value="{$_v.brand_id}">{$_v.brand_name}</option>
                            {/foreach}
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>��Ʒ�۸�</td>
                    <td><input type="text" name="f_goods_price" /></td>
                </tr>
                <tr>
                    <td>��ƷͼƬ</td>
                    <td><input type="file" name="f_goods_image" /></td>
                </tr>
                <tr>
                    <td>��Ʒ��ϸ����</td>
                    <td>
                        <textarea name="f_goods_introduce"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="���">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>