import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import pickle
dataset=pd.read_csv("heart.csv")
from sklearn.preprocessing import StandardScaler
dataset = pd.get_dummies(dataset, columns = ['sex', 'cp', 'fbs', 'restecg', 'exang', 'slope', 'ca', 'thal'])
standardScaler = StandardScaler()
columns_to_scale = ['age', 'trestbps', 'chol', 'thalach', 'oldpeak']
dataset[columns_to_scale] = standardScaler.fit_transform(dataset[columns_to_scale])
y = dataset['target'].values
x = dataset.drop(['target'], axis = 1)
from sklearn.neighbors import KNeighborsClassifier
classifier=KNeighborsClassifier(n_neighbors=5,p=2)
from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.25,random_state=0)
classifier.fit(x_train,y_train)
ypred=classifier.predict(x_test)
from sklearn.metrics import confusion_matrix
cm=confusion_matrix(y_test,ypred)
pickle.dump(classifier, open('model.pkl','wb'))