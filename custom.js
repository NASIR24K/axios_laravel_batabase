function OnUpload(){
  
 
     let MyFile=document.getElementById('my_file_ID').files[0];
     let MyFileName=MyFile.name;
     let MyFileSize=MyFile.size;
     let MyFileFormat=MyFileName.split('.').pop();
     //alert();
     let FileData=new FormData();
     FileData.append('filekey', MyFile);
     let url='/fileup';

     let config={Headers:{'content-type': 'multipart/form-data'},
     onuploadprogress:function (progressEvent){
        let upload_percentage=Math.round((progressEvent.loaded*100)/progressEvent.total)
        //alert(upload_percentage);
        $('#Upload_percentange').html(upload_percentage+ '%')
     }
    }


     axios.post(url,FileData, config)
     .then(function(response){
        if(response.status==200){
            $('#Upload_percentange').html('upload success')
            setTimeout(function(){
                $('#Upload_percentange').html('')
            },3000)
         }
         else{
            $('#Upload_percentange').html('upload fail');
            setTimeout(function(){
                $('#Upload_percentange').html('');
            },3000)
         }
      
     }).catch(function(error){
        $('#Upload_percentange').html('upload fail');
        setTimeout(function(){
            $('#Upload_percentange').html('');
        },3000)
     });
 }