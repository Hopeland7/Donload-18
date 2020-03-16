
clear
echo "yes/no"
echo "Halo Yet Apakabar"
echo "Udah Install Belum??"
read ins

if [ $ins = yes ]
then
python2 install.py
fi

if [ $ins = no ]
then
rm -rf install.py
cd new
sh index.sh
fi

if [ $ins = Yes ]
then
python2 install.py
fi

if [ $ins = No ]
then
rm -rf install.py
cd new
sh index.sh
fi
