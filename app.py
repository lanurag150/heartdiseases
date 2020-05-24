import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
model = pickle.load(open('model.pkl', 'rb'))

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict',methods=['POST'])
def predict():
   
    get = [float(x) for x in request.form.values()]
    list=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
    list[0]=get[0]
    list[1]=get[1]
    list[2]=get[2]
    list[3]=get[3]
    list[4]=get[4]
    if(get[5]==0):
          list[5]=1
    else:
        list[6]=1
    if(get[6]==0):
           list[7]=1
    elif(get[6]==1):
            list[8]=1  
    elif(get[6]==2):
          list[9]=1
    else:
          list[10]=1
    if(get[7]==0):
        list[11]=1
    else:
          list[12]=1
    if(get[8]==0):
           list[13]=1
    elif(get[8]==1):
            list[14]=1  
    
    else:
          list[15]=1 
    if(get[9]==0):
          list[16]=1
    else:
        list[17]=1 
    if(get[10]==0):
           list[18]=1
    elif(get[10]==1):
            list[19]=1  
    
    else:
          list[20]=1
    if(get[11]==0):
           list[21]=1
    elif(get[11]==1):
            list[22]=1  
    elif(get[11]==2):
          list[23]=1
    elif(get[11]==3):
          list[24]=1 
    else:
          list[25]=1
    if(get[12]==0):
           list[26]=1
    elif(get[12]==1):
            list[27]=1  
    elif(get[12]==2):
          list[28]=1
    else:
          list[29]=1
          
    print(list)    
    final_features = [np.array(list)]
    prediction = model.predict(final_features)

    output = round(prediction[0], 2)
    print(output)
    if(output==1):
       return render_template('index1.html', prediction_text='RESULT IS POSITIVE')
    else:
          return render_template('index2.html', prediction_text='RESULT IS NEGATIVE')  
if __name__ == "__main__":
    app.run(debug=False)