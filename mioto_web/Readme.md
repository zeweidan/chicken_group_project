# Git clone
Existing Git repository

```
cd existing_repo
git remote rename origin old-origin
git remote add origin http://our git lab/front/mioto_web1.0.git
git push -u origin --all
git push -u origin --tags
```

# Start App
Step 1: Install frontend dependencies
In the directory where the package.json file is located

cd mioto_web/frontend

```
npm install
```

Step 2: Build the front end
In the frontend directory

```
npm run build
```

Step 3: Start the project with Django's own server
In the directory where manage.py is located


```
pip install -r requirements.txt
python manage runserver
#in server 
#python3.6 manage runserver
```