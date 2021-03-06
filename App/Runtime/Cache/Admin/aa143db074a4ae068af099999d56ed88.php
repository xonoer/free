<?php if (!defined('THINK_PATH')) exit();?>
          <!-- content main container -->
          <div class="main">

            <!-- row -->
            <div class="row">
           
              <!-- col 12 -->
              <div class="col-md-12">
                            
                <!-- tile -->
                <section class="tile transparent">

                  <!-- tile header -->
                  <div class="tile-header transparent">
                    <h1><strong>商品列表</strong></h1>
                    <span class="note">including: <span class="italic">multi-column sorting and row select</span></span>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body color transparent-black rounded-corners">
                    
                    <div class="table-responsive">
                      <table  class="table table-datatable table-custom" id="basicDataTable" >
                        <thead>
                          <tr id="xlr">
                          <th class="sort-alpha" style="font-size:18px; width:10px; font-weight:900; color:pink;">
                          <input type="submit" value="全部删除">
                          <a href="<?php echo U('goods/out');?>"><input type="button" value="导出">
                          </a>
                          <form action="<?php echo U('goods/put');?>" enctype="multipart/form-data" method="post">
                              <input type="file" name="file">
                              <input type="submit" value="导入">
                          </form>
                          </th>
                            <th class="sort-alpha" style="font-size:18px; font-weight:900; color:pink;">商品名</th>
                            <th class="sort-alpha" style="font-size:18px;">品牌</th>
                            <!-- <th class="sort-alpha" style="font-size:18px;">商品属性</th> -->
                            <th class="sort-alpha" style="font-size:18px; font-weight:900; color:pink; text-align:center;">操作</th>
                          </tr>
                        </thead>
                        <tbody id="tbody">
                          <!-- 第一个表格 -->
                          <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr class="gradeA" >
                                  <td><input name = "id[]" class="idd" type = "checkbox" value = "<?=$val['id']?>"><?php echo ($val['id']); ?></td>
                                  <td class="name"><?php echo ($val['name']); ?></td>
                                  
                                  <td class="pid"><?php echo ($val[brand][name]); ?></td>
                                 <!--  <td class="pid"><?php echo ($val['pid']); ?></td> -->
                                  <td class="actions text-center" style="text-align:center;">
                                    <i class="icon-edit"></i>
                                    <a class="edit" href="<?php echo U('edit',"id=$val[id]");?>">编辑</a>
                                    <i class="icon-trash"></i>
                                    <a class="delete" onclick="return confirm('确定要删除吗')" href="<?php echo U('delete',array('id'=>$val['id']));?>">删除</a>
                                  </td>
                                  
                          </tr><?php endforeach; endif; ?>             
                          <!-- 第一个 表格结束 -->                
                        </tbody>
                      </table>
                    </div>

                  </div>
                  <!-- /tile body -->
                
                </section>
                <!-- /tile -->


              </div>
              <!-- /col 12 -->


              
            </div>
            <!-- /row -->
          


          </div>
          <!-- /content container -->


        </div>
        <!-- Page content end -->


      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->



    <section class="videocontent" id="video"></section>

    <script>
    // $(function(){

    //   // Add custom class to pagination div
    //   $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

    //   /*************************************************/
    //   /**************** BASIC DATATABLE ****************/
    //   /*************************************************/

    //   /* Define two custom functions (asc and desc) for string sorting */
    //   jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
    //       return ((x < y) ? -1 : ((x > y) ?  1 : 0));
    //   };
       
    //   jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
    //       return ((x < y) ?  1 : ((x > y) ? -1 : 0));
    //   };

    //    /* Build the DataTable with third column using our custom sort functions */
    //   var oTable01 = $('#basicDataTable').dataTable({
    //     "sDom":
    //       "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
    //       "t"+
    //       "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
    //     "oLanguage": {
    //       "sSearch": ""
    //     },
    //     "aaSorting": [ [0,'asc'], [1,'asc'] ],
    //     "aoColumns": [
    //       null,
    //       null,
    //       { "sType": 'string-case' },
    //       null,
    //       null
    //     ],
    //     "fnInitComplete": function(oSettings, json) { 
    //       $('.dataTables_filter input').attr("placeholder", "Search");
    //     }
    //   });

    //   /* Add a click handler to the rows - this could be used as a callback */
    

    //   // Append delete button to table
    //   var deleteRowLink = '<a href="#" id="deleteRow" class="btn btn-red btn-xs delete-row">Delete selected row</a>'
    //   $('#basicDataTable_wrapper').append(deleteRowLink);

    //   /* Add a click handler for the delete row */
    //   $('#deleteRow').click( function() {
    //     var anSelected = fnGetSelected(oTable01);
    //     if (anSelected.length !== 0 ) {
    //       oTable01.fnDeleteRow(anSelected[0]);
    //       $('#deleteRow').stop().fadeOut(300);
    //     }
    //   });

    //   /* Get the rows which are currently selected */
    //   function fnGetSelected(oTable01Local){
    //     return oTable01Local.$('tr.row_selected');
    //   };

    //   /*******************************************************/
    //   /**************** INLINE EDIT DATATABLE ****************/
    //   /*******************************************************/

    //   // function restoreRow (oTable02, nRow){
    //   //   var aData = oTable02.fnGetData(nRow);
    //   //   var jqTds = $('>td', nRow);
        
    //   //   for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
    //   //     oTable02.fnUpdate( aData[i], nRow, i, false );
    //   //   }
        
    //   //   oTable02.fnDraw();
    //   // };

    //   // function editRow (oTable02, nRow){
    //   //   var aData = oTable02.fnGetData(nRow);
    //   //   var jqTds = $('>td', nRow);
    //   //   jqTds[0].innerHTML = '<input type="text" value="'+aData[0]+'">';
    //   //   jqTds[1].innerHTML = '<input type="text" value="'+aData[1]+'">';
    //   //   jqTds[2].innerHTML = '<input type="text" value="'+aData[2]+'">';
    //   //   jqTds[3].innerHTML = '<input type="text" value="'+aData[3]+'">';
    //   //   jqTds[4].innerHTML = '<input type="text" value="'+aData[4]+'">';
    //   //   jqTds[5].innerHTML = '<a class="edit save" href="#">Save</a><a class="delete" href="#">Delete</a>';
    //   // };

    //   // function saveRow (oTable02, nRow){
    //   //   var jqInputs = $('input', nRow);
    //   //   oTable02.fnUpdate( jqInputs[0].value, nRow, 0, false );
    //   //   oTable02.fnUpdate( jqInputs[1].value, nRow, 1, false );
    //   //   oTable02.fnUpdate( jqInputs[2].value, nRow, 2, false );
    //   //   oTable02.fnUpdate( jqInputs[3].value, nRow, 3, false );
    //   //   oTable02.fnUpdate( jqInputs[4].value, nRow, 4, false );
    //   //   oTable02.fnUpdate( '<a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a>', nRow, 5, false );
    //   //   oTable02.fnDraw();
    //   // };



    //   // var oTable02 = $('#inlineEditDataTable').dataTable({
    //   //   "sDom":
    //   //     "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
    //   //     "t"+
    //   //     "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
    //   //   "oLanguage": {
    //   //     "sSearch": ""
    //   //   },
    //   //   "aoColumnDefs": [
    //   //     { 'bSortable': false, 'aTargets': [ "no-sort" ] }
    //   //   ],
    //   //   "fnInitComplete": function(oSettings, json) { 
    //   //     $('.dataTables_filter input').attr("placeholder", "Search");
    //   //   }
    //   // });

    //   // Append add row button to table
    //   // var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Add row</a>'
    //   // $('#inlineEditDataTable_wrapper').append(addRowLink);

    //   // var nEditing = null;

    //   // // Add row initialize
    //   // $('#addRow').click( function (e) {
    //   //   e.preventDefault();

    //   //   // Only allow a new row when not currently editing
    //   //   if ( nEditing !== null ) {
    //   //     return;
    //   //   }
        
    //   //   var aiNew = oTable02.fnAddData([ '', '', '', '', '', '<a class="edit" href="">Edit</a>', '<a class="delete" href="">Delete</a>' ]);
    //   //   var nRow = oTable02.fnGetNodes(aiNew[0]);
    //   //   editRow(oTable02, nRow);
    //   //   nEditing = nRow;

    //   //   $(nRow).find('td:last-child').addClass('actions text-center');
    //   // });

    //   // // Delete row initialize
    //   // $(document).on( "click", "#inlineEditDataTable a.delete", function(e) {
    //   //   e.preventDefault();
        
    //   //   var nRow = $(this).parents('tr')[0];
    //   //   oTable02.fnDeleteRow( nRow );
    //   // });

    //   // Edit row initialize
    //   // $(document).on( "click", "#inlineEditDataTable a.edit", function(e) {
    //   //   e.preventDefault();
         
    //   //   /* Get the row as a parent of the link that was clicked on */
    //   //   var nRow = $(this).parents('tr')[0];
         
    //   //   if (nEditing !== null && nEditing != nRow){
    //   //     /* A different row is being edited - the edit should be cancelled and this row edited */
    //   //     restoreRow(oTable02, nEditing);
    //   //     editRow(oTable02, nRow);
    //   //     nEditing = nRow;
    //   //   }
    //   //   else if (nEditing == nRow && this.innerHTML == "Save") {
    //   //     /* This row is being edited and should be saved */
    //   //     saveRow(oTable02, nEditing);
    //   //     nEditing = null;
    //   //   }
    //   //   else {
    //   //     /* No row currently being edited */
    //   //     editRow(oTable02, nRow);
    //   //     nEditing = nRow;
    //   //   }
    //   // });

    //   /******************************************************/
    //   /**************** DRILL DOWN DATATABLE ****************/
    //   /******************************************************/

    //   // var anOpen = [];

    //   // var oTable03 = $('#drillDownDataTable').dataTable({
    //   //   "sDom":
    //   //     "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
    //   //     "t"+
    //   //     "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
    //   //   "oLanguage": {
    //   //     "sSearch": ""
    //   //   },
    //   //   "aoColumnDefs": [
    //   //     { 'bSortable': false, 'aTargets': [ "no-sort" ] }
    //   //   ],
    //   //   "aaSorting": [[ 1, "asc" ]],
    //   //   "bProcessing": true,
    //   //   // "sAjaxSource": "resource/admin/js/vendor/datatables/ajax/sources/objects.txt",
    //   //   "sAjaxSource": "",
    //   //   "aoColumns": [
    //   //     {
    //   //       "mDataProp": null,
    //   //       "sClass": "control text-center",
    //   //       "sDefaultContent": '<a href="#"><i class="fa fa-plus"></i></a>'
    //   //     },
    //   //     { "mDataProp": "engine" },
    //   //     { "mDataProp": "browser" },
    //   //     { "mDataProp": "grade" }
    //   //   ],
    //   //   "fnInitComplete": function(oSettings, json) { 
    //   //     $('.dataTables_filter input').attr("placeholder", "Search");
    //   //   }
    //   // });

    //   // $(document).on( 'click', '#drillDownDataTable td.control', function () {
    //   //   var nTr = this.parentNode;
    //   //   var i = $.inArray( nTr, anOpen );

    //   //   $(anOpen).each( function () {
    //   //     if ( this !== nTr ) {
    //   //       $('td.control', this).click();
    //   //     }
    //   //   });
        
    //   //   if ( i === -1 ) {
    //   //     $('i', this).removeClass().addClass('fa fa-minus');
    //   //     $(this).parent().addClass('drilled');
    //   //     var nDetailsRow = oTable03.fnOpen( nTr, fnFormatDetails(oTable03, nTr), 'details' );
    //   //     $('div.innerDetails', nDetailsRow).slideDown();
    //   //     anOpen.push( nTr );
    //   //   }
    //   //   else {
    //   //     $('i', this).removeClass().addClass('fa fa-plus');
    //   //     $(this).parent().removeClass('drilled');
    //   //     $('div.innerDetails', $(nTr).next()[0]).slideUp( function () {
    //   //       oTable03.fnClose( nTr );
    //   //       anOpen.splice( i, 1 );
    //   //     } );
    //   //   }

    //   //   return false;
    //   // });
       
    //   // function fnFormatDetails( oTable03, nTr ){
    //   //   var oData = oTable03.fnGetData( nTr );
    //   //   var sOut =
    //   //     '<div class="innerDetails">'+
    //   //       '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
    //   //         '<tr><td>Rendering engine:</td><td>'+oData.engine+'</td></tr>'+
    //   //         '<tr><td>Browser:</td><td>'+oData.browser+'</td></tr>'+
    //   //         '<tr><td>Platform:</td><td>'+oData.platform+'</td></tr>'+
    //   //         '<tr><td>Version:</td><td>'+oData.version+'</td></tr>'+
    //   //         '<tr><td>Grade:</td><td>'+oData.grade+'</td></tr>'+
    //   //       '</table>'+
    //   //     '</div>';
    //   //   return sOut;
    //   // };

    //   /****************************************************/
    //   /**************** ADVANCED DATATABLE ****************/
    //   /****************************************************/

    //   var oTable04 = $('#advancedDataTable').dataTable({
    //     "sDom":
    //       "<'row'<'col-md-4'l><'col-md-4 text-center sm-left'T C><'col-md-4'f>r>"+
    //       "t"+
    //       "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
    //      "oLanguage": {
    //       "sSearch": ""
    //     },
    //     "oTableTools": {
    //       "sSwfPath": "resource/admin/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
    //       "aButtons": [
    //         "copy",
    //         "print",
    //         {
    //           "sExtends":    "collection",
    //           "sButtonText": 'Save <span class="caret" />',
    //           "aButtons":    [ "csv", "xls", "pdf" ]
    //         }
    //       ]
    //     },
    //     "fnInitComplete": function(oSettings, json) { 
    //       $('.dataTables_filter input').attr("placeholder", "Search");
    //     },
    //     "oColVis": {
    //       "buttonText": '<i class="fa fa-eye"></i>'
    //     }
    //   });

    //   $('.ColVis_MasterButton').on('click', function(){
    //     var newtop = $('.ColVis_collection').position().top - 45; 

    //     $('.ColVis_collection').addClass('dropdown-menu');
    //     $('.ColVis_collection>li>label').addClass('btn btn-default')     
    //     $('.ColVis_collection').css('top', newtop + 'px');
    //   });

    //   $('.DTTT_button_collection').on('click', function(){
    //     var newtop = $('.DTTT_dropdown').position().top - 45;   
    //     $('.DTTT_dropdown').css('top', newtop + 'px');
    //   });

    //   //initialize chosen
    //   $('.dataTables_length select').chosen({disable_search_threshold: 10});
      
    // })

      //button不能提交，用jS写跳转提交。
      $('.tijiao').click(function(){
        //获取输入框的值  .val()是获取input标签里面的值。
        var p = $('.number').val();
        location.href="index.php?admin=1&c=menus&a=list&p="+p;
      })


      var c = 0;//设置一个开关
      //双击修改标题
      $('.name').dblclick(function(){
        //如果c的条件与声明的不成立，则结果为真。
        if(!c){
          c=1; 
        }else{
          return false;
        }

            var td = $(this);

            //获取当前标题内容
            var title = td.html();

            //将td内的内容替换成input   并将原本的页面内容作为input的value
            td.html('<input type ="text" value ="'+title+'"/>');
            //给input添加获得光标事件  
            td.find('input').focus();
            //当鼠标点击Input外面时， .blur是鼠标离开 
            td.find('input').blur(function(){
                //获取当前修改后的内容,$(this)是修改后的内容
                var val = $(this).val();

                //判断修改后的内容与原先是否一致
                if(title == val){
                    td.html(val);
                    c = 0;//重置开关
                    return false;
                }
                //如果内容不一样则获取当前数据的id并执行ajax
                var id = td.prev().text();//标题td的前一个td是数据id；td.prev()此td的前一个td，.text()获取文本内容
                //无刷新获取标题修改路径
                // var url='index.php?admin=1&c=news&a=edit&id='+id;
                //执行ajax无页面刷新
                $.ajax({  
                    type:'post',
                    // url:url,
                    data:{'name':val},
                    success:function(cate){

                        if(cate == 1){
                          alert ('修改成功');
                        }else{
                          alert ('修改失败');
                        }
                        
                  }
              })
              td.html(val);
                c = 0;//重置开关
       })     

      })

      // $('.sort-alpha').css({'width':'100px','color':'#fff'});

      $('#tbody').on('click','.plus',function(){
          // alert();
          var plus = $(this);
          //获取i标签的父级的前一级，就是id的标签
          var id = plus.parent().prev().text();
          // alert (id);
          //获取到当前点击项的tr 
          var tr = plus.parents('tr');
          // alert (tr);
          // //获取tr的类名
          var clas = tr.attr('class');
          

          //如果一开始没有类名 则child_12;  如果有了 child_12_23
          clas = clas?clas+'_'+id:'child_'+id;
          //如果i标签是加号
          if(plus.is('.icon-plus')){
            //点击后减去加号，添加减号
            plus.removeClass('icon-plus');
            plus.addClass('icon-minus');
            }else{
              //否则点击后减去减号，添加加号。
              plus.addClass('icon-plus');
              plus.removeClass('icon-minus');
          //如果clas=child_12,那么所有以这个名字为开头的tr都会被移除 
          
              $('tr[class^="'+clas+'"]').remove();

              return false;
            }

            //加层级标签属性，在i标签里加入了一个lv层级属性，lv="0"则层级为零级；
            //获取当前标签的属性值
            var lv = plus.attr('lv');
            //属性值增加
            lv++;
            //声明一个空格字符串
            var space = '';
            //根据增加后的lv进行循环 循环拼接空格 
            for(var j=0;j<=lv;j++){
              space += "&nbsp;&nbsp;&nbsp;";
            }
           
          $.ajax({
            type:'post',
            data:{id:id},
            url:"<?php echo U(ajax);?>",
            success:function(cate){
              // alert(cate);
              var str = '';
              for(var i in cate){
                  str += '<tr class="'+clas+'" pid="0">';
                  str +='<td><input name = "id[]" class="idd" type="checkbox" value = "'+cate[i].id+'">'+cate[i].id+'</td>';
                   str +='<td class="name">';

                   if(cate[i].child==1){
                    str += space+cate[i].name+'<i class="icon-plus plus" lv="'+lv+'" style="cursor:pointer"></i>';
                     }else{str += space+cate[i].name;}

                    str +='</td>';
                    str +='<td class="pid">'+cate[i].pid+'</td>';
                    str +='<td class="actions text-center" style="text-align:center;">';
                    str +='<i class="icon-edit"></i>';
                    str +='<a class="edit" href="/index.php/Admin/Goods/edit/id/'+cate[i].id+'">编辑</a>';
                    str +='<i class="icon-trash"></i>';
                    str +='<a class="delete" onclick="return confirm('+'"确定要删除吗"'+')" href="/index.php/Admin/Goods/edit/id/'+cate[i].id+'">删除</a>';
                     str +='</td>';
                     str +='</tr>';
                      }
                      // alert(str);
                  tr.after(str);
                 } 
            
          })

      })

    </script>
  </body>
</html>