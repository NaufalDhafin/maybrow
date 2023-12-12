import os

commit = str(input("Isi nama untuk ngepush: "))
os.system("git add .")
os.system(f"git commit -m {commit}")
os.system("git push")
print()
print("Telah selesai")