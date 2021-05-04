<html>
<body>
<INPUT TYPE="TEXT" NAME="maparea" SIZE=2 VALUE="">
 <input type=button onClick='targetitem = document.forms[0].maparea; 
 dataitem = window.open("tab.jpg",
 "dataitem", "toolbar=no,menubar=no,scrollbars=yes"); dataitem.targetitem = targetitem' 
 value="Show Map">
 <script>gt;
function select_item(item)
{
targetitem.value = item;
top.close();
return false;
}
</script>

<CENTER>
<B>Our Map</B>
<BR>
<IMAGE SRC="tab.jpg" ISMAP USEMAP="#MAP1">
<MAP NAME="MAP1">
<AREA SHAPE=RECT COORDS="11,10,116,133" HREF="" onClick='return select_item("1")'>
<AREA SHAPE=RECT COORDS="121,11,227,172" HREF="" onClick='return select_item("2")'>
<AREA SHAPE=RECT COORDS="11,140,115,226" HREF="" onClick='return select_item("3")'>
<AREA SHAPE=RECT COORDS="119,177,225,227" HREF="" onClick='return select_item("4")'>
<AREA SHAPE=default HREF="" >
</MAP>
</CENTER>
 </body>
 </html>