<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=gbk" />
        <link href="<?php echo ADMIN_CSS_URL; ?>admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=<?php echo ADMIN_IMG_URL; ?>menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);">��������</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��˾���</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(2) 
                                    href="javascript:void(0);">��������</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��˾����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(3) 
                                    href="javascript:void(0);">��Ʒ����</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child3 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��Ʒչʾ</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>���²�Ʒ</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(4) 
                                    href="javascript:void(0);">�ͻ�����</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child4 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�ͻ�����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(5) 
                                    href="javascript:void(0);">���䰸��</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child5 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�������</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(6) 
                                    href="javascript:void(0);">�߼�����</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child6 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>����ͳ��</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�ʼ���������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��ϵ����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�û�����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��Ƹְλ</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>ӦƸ��Ա</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>���Բ�</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��Ʒ����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>���ӹ���</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�ļ�����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��Ϣת��</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(7) 
                                    href="javascript:void(0);">ϵͳ����</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child7 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��������</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��ʽ����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��Ŀ����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>���ܹ���</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�˵�����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>��ҳ����</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>����Ա�б�</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo ADMIN_IMG_URL; ?>menu_bt.jpg><a 
                                    class=menuparent onclick=expand(0) 
                                    href="javascript:void(0);">���˹���</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child0 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>�޸Ŀ���</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo ADMIN_IMG_URL; ?>menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   onclick="if (confirm('ȷ��Ҫ�˳���')) return true; else return false;" 
                                   href="http://www.865171.cn" 
                                   target=_top>�˳�ϵͳ</a></td></tr></table></td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html>