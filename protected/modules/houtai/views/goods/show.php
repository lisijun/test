<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=gbk" />

        <title>��Ա�б�</title>

        <link href="<?php echo ADMIN_CSS_URL; ?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">��ǰλ���ǣ���Ʒ����-����Ʒ�б�</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="./index.php?r=houtai/goods/add">�������Ʒ��</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    Ʒ��<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">��ѡ��</option>
                        <option value="1">ƻ��apple</option>
                    </select>
                    <input value="��ѯ" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>���</td>
                        <td>��Ʒ����</td>
                        <td>���</td>
                        <td>�۸�</td>
                        <td>ͼƬ</td>
                        <td>����ͼ</td>
                        <td>Ʒ��</td>
                        <td>����ʱ��</td>
                        <td align="center">����</td>
                    </tr>
                    <tr id="product1">
                        <td>1</td>
                        <td><a href="#">ƻ����APPLE��iPhone 4S</a></td>
                        <td>100</td>
                        <td>3888</td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td>ƻ��apple</td>
                        <td>2012-10-18 17:40:34</td>
                        <td><a href="./index.php?r=houtai/goods/update">�޸�</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">ɾ��</a></td>
                    </tr>
                    <tr id="product2">
                        <td>2</td>
                        <td><a href="#">ƻ����APPLE��iPhone 4</a></td>
                        <td>100</td>
                        <td>3100</td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174248-28718.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174248-87501.jpg" height="40" width="40"></td>
                        <td>ƻ��apple</td>
                        <td>2012-10-18 17:42:48</td>
                        <td><a href="./index.php?r=houtai/goods/update">�޸�</a></td>
                        <td><a href="javascript:;" onclick="delete_product(2)">ɾ��</a></td>
                    </tr>
                    <tr id="product3">
                        <td>3</td>
                        <td><a href="#">ƻ����APPLE��iPhone 4 8G��</a></td>
                        <td>100</td>
                        <td>1290</td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174346-31424.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174346-54660.jpg" height="40" width="40"></td>
                        <td>ƻ��apple</td>
                        <td>2012-10-18 17:43:46</td>
                        <td><a href="./index.php?r=houtai/goods/update">�޸�</a></td>
                        <td><a href="javascript:;" onclick="delete_product(3)">ɾ��</a></td>
                    </tr>
                    <tr id="product4">
                        <td>4</td>
                        <td><a href="#">ƻ����APPLE��iPhone 4S 16G��</a></td>
                        <td>100</td>
                        <td>987</td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174455-91962.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo ADMIN_IMG_URL; ?>20121018-174455-10118.jpg" height="40" width="40"></td>
                        <td>ƻ��apple</td>
                        <td>2012-10-18 17:44:30</td>
                        <td><a href="./index.php?r=houtai/goods/update" >�޸�</a></td>
                        <td><a href="./index.php?r=houtai/goods/update" >ɾ��</a></td>
                    </tr>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>