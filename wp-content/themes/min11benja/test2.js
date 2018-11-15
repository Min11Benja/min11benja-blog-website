// Input Dictionario: Horse 
//output : Shore, seroh, etc


dic = get_dictionary();
next = next_word(i);


void getAnagremas(String Ref) {
    
    var anagrama;
    var iContPalabra=1;
   var dic_input=dic;
    var iCantPalabrasGeneradas=0;
    //obtener cantidad de letras
    var longitud_ref=Ref.length();
    bool bMatch =false;
    
     //obtener todas las distintas palabras que s epueden generar reordenando cada letra
    
    for(int i=0;i<longitud_ref;i++){
         var palabras_posibles [i]= get_all_words(Ref,i);//supiendo que genere una funcion que me regresa un areglo de todas las distintas palabras posibles 
        iCantPalabrasGeneradas++;
    }
    
    
    //comparar cada palabra generada reordenando las letras con la palabra obtenida del dicionario
    for(int j=0;j<iCantPalabrasGeneradas;j++){
        if(palabras_posibles[j]==dic_input){
            m =true;
            anagrama= palabras_posibles[j];
      }
    }
    
    if(bMatch){
        return anagrama;
    }else{
        
    }
   
}