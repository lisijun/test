<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>�޸���Ʒ</title>
        <meta http-equiv="content-type" content="text/html;charset=gbk">
        <link href="<?php echo ADMIN_CSS_URL; ?>mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">��ǰλ���ǣ���Ʒ����-���޸���Ʒ��Ϣ</span>
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
                    <td><input type="text" name="f_goods_name" value="KD877" /></td>
                </tr>
                <tr>
                    <td>��Ʒ����</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option>��ѡ��</option>
                            <option>���õ���</option>
                            <option>�ֻ�����</option>
                            <option>���԰칫</option>
                            <option>����Ьñ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>��ƷƷ��</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option>��ѡ��</option>
                            <option>ƻ��</option>
                            <option>ŵ����</option>
                            <option>HTC</option>
                            <option>Ħ������</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>��Ʒ�۸�</td>
                    <td><input type="text" name="f_goods_price" value="1239.99" /></td>
                </tr>
                <tr>
                    <td>��ƷͼƬ</td>
                    <td><input type="file" name="f_goods_image" value="<?php echo ADMIN_IMG_URL; ?>2013-12-33.jpg" /></td>
                </tr>
                <tr>
                    <td>��Ʒ��ϸ����</td>
                    <td>
                        <textarea name="f_goods_introduce">׿Խ���˱���ƣ�ȴ��ȻΪ�������ʾ���͸����оƬԤ���˿ռ䡣����������������Ҳ�����������ʹ��ʱ�䡣ȫ�¶�������������Ч�ͷǷ����ϵ����ʶȡ�����ڶ�ľ��ʹ���������� iPhone����ˣ���ſ����������ľ��ʸ��ࡣ</textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="�޸�">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>