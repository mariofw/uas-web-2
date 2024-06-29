using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ci
{
    #region Pengajuan
    public class Pengajuan
    {
        #region Member Variables
        protected int _id;
        protected string _nama;
        protected string _nim;
        protected string _program_studi;
        protected string _laporan;
        protected string _berkas_pendukung;
        protected unknown _tanggal_pengajuan;
        protected unknown _status;
        #endregion
        #region Constructors
        public Pengajuan() { }
        public Pengajuan(string nama, string nim, string program_studi, string laporan, string berkas_pendukung, unknown tanggal_pengajuan, unknown status)
        {
            this._nama=nama;
            this._nim=nim;
            this._program_studi=program_studi;
            this._laporan=laporan;
            this._berkas_pendukung=berkas_pendukung;
            this._tanggal_pengajuan=tanggal_pengajuan;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Nama
        {
            get {return _nama;}
            set {_nama=value;}
        }
        public virtual string Nim
        {
            get {return _nim;}
            set {_nim=value;}
        }
        public virtual string Program_studi
        {
            get {return _program_studi;}
            set {_program_studi=value;}
        }
        public virtual string Laporan
        {
            get {return _laporan;}
            set {_laporan=value;}
        }
        public virtual string Berkas_pendukung
        {
            get {return _berkas_pendukung;}
            set {_berkas_pendukung=value;}
        }
        public virtual unknown Tanggal_pengajuan
        {
            get {return _tanggal_pengajuan;}
            set {_tanggal_pengajuan=value;}
        }
        public virtual unknown Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ci
{
    #region Users
    public class Users
    {
        #region Member Variables
        protected int _id;
        protected string _username;
        protected string _password;
        protected unknown _created_at;
        #endregion
        #region Constructors
        public Users() { }
        public Users(string username, string password, unknown created_at)
        {
            this._username=username;
            this._password=password;
            this._created_at=created_at;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual unknown Created_at
        {
            get {return _created_at;}
            set {_created_at=value;}
        }
        #endregion
    }
    #endregion
}