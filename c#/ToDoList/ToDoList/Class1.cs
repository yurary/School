using System;

namespace ToDoList
{
    public enum PriorityLevel
    {
        Low,
        Medium,
        High
    }

    public class TaskItem
    {
        public int IdItem { get; set; }
        public string Title { get; set; }
        public string Object { get; set; }
        public DateTime Termin { get; set; }
        public PriorityLevel Priorite { get; set; }
        public bool IsDone { get; set; }

        public TaskItem(int id, string title, string obj,
                        DateTime termin, PriorityLevel priorite)
        {
            IdItem = id;
            Title = title;
            Object = obj;
            Termin = termin;
            Priorite = priorite;
            IsDone = false;
        }

        public override string ToString()
        {
            return $"{IdItem}. {Title} | {Object} | {Termin:dd.MM.yyyy} | {Priorite}";
        }
    }
}
