clear
echo "---SSH Connection---"
chmod 400 Kantakey.pem
git merge -s ours master
git checkout master
git merge seotweaks
ssh -i "Kantakey.pem" ubuntu@ec2-35-160-218-121.us-west-2.compute.amazonaws.com 'bash -s' < gitmergecheckout.sh
echo "---Connection Exit---"