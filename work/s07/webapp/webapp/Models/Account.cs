using System;
using System.Collections.Generic ;
//using System.IO;
using System.Text.Json;
//using System.Text.Json.Serialization;

namespace webapp.Models
{
    public class Account {

        private int number;
        private int balance;
        private string label;
        private int owner;

        public int Owner { get => owner; set => owner = value; }
        public string Label { get => label; set => label = value; }
        public int Balance { get => balance; set => balance = value; }
        public int Number { get => number; set => number = value; }
    }
}