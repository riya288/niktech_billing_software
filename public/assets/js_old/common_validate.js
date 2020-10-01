function valid(id,msg,validation,max,password,optional,paddingleft)
{
    
    msg = "(" + msg +")";
    var $casestate=0;        
    var cpass = jQuery('#' + password).val()
    var Inputvalue = $(id).val()   
    var Inputlength = $(id).val().length
    
      
    if(paddingleft===undefined)
    {
        paddingleft=140;        
    }        
    switch(validation)
    {
      
        case "empty":
        {          
            if(Inputlength<1)
            {      
                if(optional!==undefined && optional!="") 
                {           
                
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    {                                                                                    
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft  +'px; color:#C20000;">' + msg +'</div>');
                    }    
                }
                return "0";
            }
            else
            {
                $(optional).html('');
                return "1"; 
                break;             
            }
        }
        case "MaxLength":
        {
            if(Inputlength<max)
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    }
                } 
                 return "0"; 
            }
            else
            {
                return "1";
                break;
            }
        }
        case "isNaN":
        {
            if(isNaN(Inputvalue))
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    }
                }
              return "0";                 
            }
            else
            {
              return "1";
                break;
            }
        }
        case "email":
        {
              
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,10})$/;  
            if(reg.test($(id).val())==false)    
            {
                if(optional!==undefined && optional!="") 
                {
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                       
                    }
                }
             return "0";         
            }
            else
            {
                return "1";      
                break;
            }
        }
         
        case "conformpassword":
        {
            if(Inputvalue!=cpass)
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                        break;
                    }
                }       
            return "0";      
            }
            else
            {
                 return "1";      
                  break;
            }
        }  
        case "isChecked":
        {      
               if(jQuery(id).next().hasClass("errorClass").toString()=="true")
                {
                    jQuery(id).next().remove();           
                } 
                
                
                var len = jQuery(id).find('input').length
                var cnt=0;
                
                jQuery(id).find('input').each(function(){
                    var islength = $(this).is(":checked");
                    if(!islength)
                    {
                        cnt++;
                    }
                });
                if (cnt==len) 
                {   
                    if(optional!==undefined && optional!="") 
                    {
                        
                        
                        $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    }
                    else
                    {
                        if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                            { 
                                jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; clear:both; color:#C20000;">' + msg +'</div>');
                                
                            }   
                    }
                 return "0";      
                }
                else
                {
                     return "1";      
                    break;       
                } 
        }
         case "datevalidation":
        {       
                if(jQuery(id).next().hasClass("errorClass").toString()=="true")
                { 
                    jQuery(id).next().remove();     
                }
                jQuery(id).find('select').each(function(){
                var drop = $(this).val(); 
                //alert(drop); 
                if (drop==0) 
                {
                    if(optional!==undefined && optional!="") 
                    {
                        
                        $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    }
                    else
                    {   
                        if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                        { 
                                jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');    
                        }   
                    }
                    return "0";   
                } 
                else
                {
                    return "1";
                }
               });   
        }
        case "alphanumeric":
        {                                         
            var regAlphanumeric = /^[0-9]+$/;
            var regAlphacharector = /^[a-zA-Z]+$/;
            
            if(regAlphanumeric.test($(id).val())==true || regAlphacharector.test($(id).val())==true) 
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }
                }
                 return "0"; 
            }
            else
            {
                return "1";
                break;
            }
        }
        case "isCharacter":
        {
            if(!(isNaN(Inputvalue)))
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }
                }
              return "0";                 
            }
            else
            {
              return "1";
                break;
            }
        }
        case "NoSpace":
        {
            if(Inputvalue.indexOf(" ")!=-1)
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }
                }
              return "0";                 
            }
            else
            {
              return "1";
                break;
            }
        }
        case "MinLength":
            if(Inputlength>max)
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    }
                } 
                 return "0"; 
            }
            else
            {
                return "1";
                break;
            }
         case "matching":
                   var Inputvalue = $.trim(Inputvalue);
                   var FirstIframe=Inputvalue.substring(0,7);
                   var LastIframe =Inputvalue.substr(Inputvalue.length - 9);
                   var WordNotRepeat=Inputvalue.match(/<iframe/g);
                   var WordNotRepeat1=Inputvalue.match(/src/g);
                   var LinkMatch=Inputvalue.match(/www.youtube.com\/embed/g);
                   
                   if(Inputvalue.length >0 )
                   {    
                       if(WordNotRepeat1 != null && LinkMatch != null  )  
                       {
                           if(FirstIframe != '<iframe' || LastIframe != '</iframe>' || WordNotRepeat1.length !=1 || LinkMatch.length !=1)
                           {
                                $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                                return false;                      
                           }
                           else
                           {
                                if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                                { 
                                    //jQuery(id).after('<div class="errorClass" style="padding-left:'+ (105)  +'px; clear:both; color:red;">' + msg +'</div>');
                                }
                                           
                           }
                                
                       }
                       else
                       {
                            $(optional).html('<div class="errorClass" style="padding-left:'+ paddingleft  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                            return false;
                       }
                    }
                    else
                    {
                        //alert ("sfs");
                        return "1";
                        break;
                          
                    }
         case "dcbempty":
         {
            if(Inputvalue==0)
            {
                
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    {
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }    
                }
                return "0";
            }
            else
            {
                $(optional).html('');
                return "1"; 
                break;             
            }
        }
        case "fckvalidate":
         {
                 fckid = id.split(" #");
                 var oEditor = FCKeditorAPI.GetInstance(fckid[1]);
                 var pageValue = oEditor.GetData();
                 var FirstVal=pageValue.substring(0,6);   
                 if(FirstVal == "<br />")
                 {
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                    return "0";
                 }
                 else
                 {
                    var WordNotRep=pageValue.match(/&lt;iframe&g/g);
                    if(WordNotRep == null) 
                    {
                        return "1";
                    }
                    else
                    {
                        $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                        return "0";
                    }    
                 }
                   

         }
         case "exe":
         {
            var filename = Inputvalue.split('.');
            var filenameexe = filename[filename.length - 1]; 
            if(filenameexe=="exe")
            {
                
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    {
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }    
                }
                return "0";
            }
            else
            {
                $(optional).html('');
                return "1"; 
                break;             
            }
         }
         case "website":
        {
          
            var reg =  /^(((ht|f){1}(tp:[/][/]){1})|((www.){1}))[-a-zA-Z0-9@:%_\+.~#?&//=]+$/;
            
            if(reg.test($(id).val())==false)    
            {
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    { 
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                       
                    }
                }
             return "0";         
            }
            else
            {
                return "1";      
                break;
            }
        }
         case "experience":
         {          
            var Inputvaluelength = Inputvalue.length;
            if(Inputvalue.indexOf('.')!=-1)
            {
                max = parseInt(max) + parseInt(3);
            }          
            if(Inputvaluelength > max)
            {
                
                if(optional!==undefined && optional!="") 
                {
                    
                    $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                }
                else
                {
                    
                    if(jQuery(id).next().hasClass("errorClass").toString()=="false") 
                    {
                        jQuery(id).after('<div class="errorClass" style="padding-left:'+ paddingleft +'px; color:#C20000;">' + msg +'</div>');
                    }    
                }
                return "0";
            }
            else
            {
                $(optional).html('');
                return "1"; 
                break;             
            }
         }
        case "ckeditorempty":
        {
            fckid = id.split(" #");        
            var editorcontent = $.trim(CKEDITOR.instances[fckid[1]].getData().replace(/<[^>]*>/gi, ''));
            if (editorcontent.length)
            {
                $(optional).html('');
                return "1"; 
                break;             
            }
            else
            {
                $(optional).html('<div class="errorClass" style="padding-left:'+ (0)  +'px; clear:both; color:#C20000;">' + msg +'</div>');
                return "0";
            }
        }                    
    }  
}
function PrintDiv(print) 
{    
    $('.ViewDescriptionOpen').show();
    var divToPrint = document.getElementById(print);
    var popupWin = window.open('', '_blank', 'scrollbars=1,width=500,height=500');
    popupWin.document.open();
    popupWin.document.write('<html><head><link type="text/css" href="'+ GlobalPreURL +'css/style.css" rel="stylesheet" /><link type="text/css" href="'+ GlobalPreURL +'css/print.css" rel="stylesheet" /></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
    $('.ViewDescriptionOpen').hide();
}

function animatetoggle(animateContent)
{
    $('#' + animateContent).animate({
        height: ['toggle', 'swing']
        }, 300, function() {
    });             
}
function animateshow(animateContent)
{
    $('#' + animateContent).animate({
        height: ['show', 'swing']
        }, 300, function() {
    });             
}
/*function callajax(url,data,target)
{             
    $('#' + target).html(loading); 
    $("#loading").show();        
    if(target!="")
    {
        $('#' + target).html(loading);     
    }
    $.ajax({
        url: url,
        data:data,
        success: function(html) 
        {      
            //alert(html);
            $("#loading").hide();            
            if(target!="")
            {                            
                $('#' + target).html(html); 
            }
        }
    });       
    $("#loading").hide(); 
}*/
function callajaxreturn(url,data,hdnfunc,datatype,type,asynctype,args)
{       
    args=args||[];
    if(asynctype == undefined || asynctype == '') asynctype=false;
    if(datatype == undefined || datatype == '') datatype='html';
    if(type == undefined || type == '') type='GET';
    var anshtml = "false";
    //$("#loading").show();        
    
    $.ajax({
        url: url,
        type: type,
        data: data,
        dataType: datatype,
        async: asynctype,  
        success: function(html) 
        {   
            args[args.length] = html;
            anshtml = html;
            if (hdnfunc  == undefined) hdnfunc  = '';
            if (hdnfunc != '') 
            {
                valreturn = callfunction(hdnfunc,args);   
            }   
        }
    });    
    //$("#loading").hide(); 
    return anshtml;
}
function pdf(tableName,sno)
{
    window.open(GlobalPreURL +'pdf/index.php?filter='+tableName+'&filtervalue='+sno,'_newtab');
}